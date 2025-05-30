<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TespsikologiController extends Controller
{
    public function index()
    {
        return view('tespsikologi');
    }

    public function store(Request $request)
{
    // Validasi semua 42 inputan
    for ($i = 1; $i <= 42; $i++) {
        $rules['q' . $i] = 'required|integer|min:1|max:7';
    }
    $request->validate($rules);

    // Kelompokkan skor:
    $depresiScore = 0;
    $kecemasanScore = 0;
    $stresScore = 0;

    for ($i = 1; $i <= 42; $i++) {
        $nilai = (int)$request->input('q' . $i);

        if ($i <= 14) {
            $depresiScore += $nilai;
        } elseif ($i <= 28) {
            $kecemasanScore += $nilai;
        } else {
            $stresScore += $nilai;
        }
    }

    // Fungsi untuk menentukan kategori berdasarkan skor
    function kategori($skor) {
        if ($skor <= 35) return 'Normal';
        elseif ($skor <= 40) return 'Ringan';
        elseif ($skor <= 65) return 'Sedang';
        elseif ($skor <= 80) return 'Berat';
        else return 'Berat Sekali';
    }

    // Kategorikan skor
    $hasilTes = [
        'depresi' => [
            'skor' => $depresiScore,
            'kategori' => kategori($depresiScore)
        ],
        'kecemasan' => [
            'skor' => $kecemasanScore,
            'kategori' => kategori($kecemasanScore)
        ],
        'stres' => [
            'skor' => $stresScore,
            'kategori' => kategori($stresScore)
        ]
    ];

        // Kirim hasil ke view
        return redirect()->back()->with('hasil_tes', $hasilTes);
    }

}
