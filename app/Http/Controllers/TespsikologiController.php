<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesPsikologiController extends Controller
{
    // Tambahkan method index sebagai default method untuk resource controller 
    public function index()
    {
        // Menampilkan form tes psikologi
        return view('tespsikologi');
    }


    public function processForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'q1' => 'required|integer|between:1,7',
            'q2' => 'required|integer|between:1,7',
            'q3' => 'required|integer|between:1,7',
            'q4' => 'required|integer|between:1,7',
            'q5' => 'required|integer|between:1,7',
            'q6' => 'required|integer|between:1,7',
            'q7' => 'required|integer|between:1,7',
            'q8' => 'required|integer|between:1,7',
            'q9' => 'required|integer|between:1,7',
            'q10' => 'required|integer|between:1,7',
            'q11' => 'required|integer|between:1,7',
            'q12' => 'required|integer|between:1,7',
            'q13' => 'required|integer|between:1,7',
            'q14' => 'required|integer|between:1,7',
            'q15' => 'required|integer|between:1,7',
            'q16' => 'required|integer|between:1,7',
            'q17' => 'required|integer|between:1,7',
            'q18' => 'required|integer|between:1,7',
            'q19' => 'required|integer|between:1,7',
            'q20' => 'required|integer|between:1,7',
            'q21' => 'required|integer|between:1,7',
            'q22' => 'required|integer|between:1,7',
            'q23' => 'required|integer|between:1,7',
            'q24' => 'required|integer|between:1,7',
            'q25' => 'required|integer|between:1,7',
            'q26' => 'required|integer|between:1,7',
            'q27' => 'required|integer|between:1,7',
            'q28' => 'required|integer|between:1,7',
            'q29' => 'required|integer|between:1,7',
            'q30' => 'required|integer|between:1,7',
            'q31' => 'required|integer|between:1,7',
            'q32' => 'required|integer|between:1,7',
            'q33' => 'required|integer|between:1,7',
            'q34' => 'required|integer|between:1,7',
            'q35' => 'required|integer|between:1,7',
            'q36' => 'required|integer|between:1,7',
            'q37' => 'required|integer|between:1,7',
            'q38' => 'required|integer|between:1,7',
            'q39' => 'required|integer|between:1,7',
            'q40' => 'required|integer|between:1,7',
            'q41' => 'required|integer|between:1,7',
            'q42' => 'required|integer|between:1,7',
        ]);

        // Hitung skor untuk setiap kategori
        $depresiScore = $this->calculateDepresiScore($request);
        $kecemasanScore = $this->calculateKecemasanScore($request);
        $stresScore = $this->calculateStresScore($request);

        // Tentukan kategori berdasarkan skor
        $hasil_tes = [
            'depresi' => $this->getDepresiKategori($depresiScore),
            'kecemasan' => $this->getKecemasanKategori($kecemasanScore),
            'stres' => $this->getStresKategori($stresScore),
        ];

        return redirect()->back()->with('hasil_tes', $hasil_tes);
    }

    private function calculateDepresiScore($request)
    {
        return $request->q3 + $request->q5 + $request->q13 + $request->q21 + $request->q26 + $request->q34 + $request->q37 + $request->q38;
    }

    private function calculateKecemasanScore($request)
    {
        return $request->q2 + $request->q4 + $request->q6 + $request->q9 + $request->q10 + $request->q11 + $request->q12 + $request->q14 + $request->q18 + $request->q20 + $request->q28 + $request->q30 + $request->q36 + $request->q40 + $request->q41;
    }

    private function calculateStresScore($request)
    {
        return $request->q1 + $request->q7 + $request->q8 + $request->q15 + $request->q16 + $request->q17 + $request->q19 + $request->q22 + $request->q23 + $request->q24 + $request->q25 + $request->q27 + $request->q29 + $request->q31 + $request->q32 + $request->q33 + $request->q35;
    }

    private function getDepresiKategori($score)
    {
        if ($score < 10) {
            return ['kategori' => 'Normal', 'skor' => $score];
        } elseif ($score < 20) {
            return ['kategori' => 'Ringan', 'skor' => $score];
        } elseif ($score < 30) {
            return ['kategori' => 'Sedang', 'skor' => $score];
        } else {
            return ['kategori' => 'Berat', 'skor' => $score];
        }
    }

    private function getKecemasanKategori($score)
    {
        if ($score < 10) {
            return ['kategori' => 'Normal', 'skor' => $score];
        } elseif ($score < 20) {
            return ['kategori' => 'Ringan', 'skor' => $score];
        } elseif ($score < 30) {
            return ['kategori' => 'Sedang', 'skor' => $score];
        } else {
            return ['kategori' => 'Berat', 'skor' => $score];
        }
    }

    private function getStresKategori($score)
    {
        if ($score < 10) {
            return ['kategori' => 'Normal', 'skor' => $score];
        } elseif ($score < 20) {
            return ['kategori' => 'Ringan', 'skor' => $score];
        } elseif ($score < 30) {
            return ['kategori' => 'Sedang', 'skor' => $score];
        } else {
            return ['kategori' => 'Berat', 'skor' => $score];
        }
    }
}

