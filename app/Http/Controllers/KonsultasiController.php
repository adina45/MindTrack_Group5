<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('konsultasi');
    }

    public function store(Request $request)
    {
        // Validasi & simpan data
        $request->validate([
            'nama_ps' => 'required',
            'email' => 'required|email',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'keluhan' => 'required',
        ]);

        // Contoh simpan ke database jika sudah ada model Booking
        // Booking::create($request->all());

        return redirect('/konsultasi')->with('success', 'Booking berhasil dikirim!');
    }
}

