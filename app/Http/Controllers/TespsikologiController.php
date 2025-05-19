<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TespsikologiController extends Controller
{
    public function index()
    {
        return view('tespsikologi');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'q1' => 'required|in:1,2,3,4,5,6,7'
        ]);

        return back()->with('success', 'Jawaban berhasil disimpan: Skor ' . $request->q1);
    }
}
