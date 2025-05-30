<?php

namespace App\Http\Controllers;

use App\Models\TesPsikologi;
use Illuminate\Http\Request;

class TesPsikologiController extends Controller
{
    public function index()
    {
        $data = TesPsikologi::all();
        return view('tespsikologi.index', compact('data'));
    }

    public function create()
    {
        return view('tespsikologi.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'q1' => 'required|integer|min:1|max:7',
        'q2' => 'required|integer|min:1|max:7',
        'q3' => 'required|integer|min:1|max:7',
        'q4' => 'required|integer|min:1|max:7',
        'q5' => 'required|integer|min:1|max:7',
        'q6' => 'required|integer|min:1|max:7',
        'q7' => 'required|integer|min:1|max:7',
        'q8' => 'required|integer|min:1|max:7',
        'q9' => 'required|integer|min:1|max:7',
        'q10' => 'required|integer|min:1|max:7',
    ]);

    // Logika pembagian skor ke kategori DASS
    $depresi = $validated['q1'] + $validated['q4'] + $validated['q7'];
    $kecemasan = $validated['q2'] + $validated['q5'] + $validated['q8'];
    $stres = $validated['q3'] + $validated['q6'] + $validated['q9'] + $validated['q10'];

    $kategori = function ($skor) {
        if ($skor <= 7) return 'Normal';
        elseif ($skor <= 14) return 'Ringan';
        elseif ($skor <= 21) return 'Sedang';
        else return 'Berat';
    };

    $hasilTes = [
        'depresi' => ['skor' => $depresi, 'kategori' => $kategori($depresi)],
        'kecemasan' => ['skor' => $kecemasan, 'kategori' => $kategori($kecemasan)],
        'stres' => ['skor' => $stres, 'kategori' => $kategori($stres)],
    ];

    // Kirim hasil ke tampilan dengan session
    return redirect()->back()->with([
        'success' => 'Tes berhasil disimpan!',
        'hasil_tes' => $hasilTes
    ]);
}


    public function edit($id)
    {
        $item = TesPsikologi::findOrFail($id);
        return view('tespsikologi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hasil' => 'required|string',
        ]);

        $item = TesPsikologi::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('tespsikologi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = TesPsikologi::findOrFail($id);
        $item->delete();

        return redirect()->route('tespsikologi.index')->with('success', 'Data berhasil dihapus.');
    }
}
