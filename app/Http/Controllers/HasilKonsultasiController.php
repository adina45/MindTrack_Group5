<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilKonsultasi;
use App\Models\DaftarPsikolog;

class HasilKonsultasiController extends Controller
{
    public function index()
    {
        $data = HasilKonsultasi::all();
        $psikologs = DaftarPsikolog::pluck('psikolog_id'); // Ambil nama psikolog berdasarkan ID

        return view('konsultasi.index', compact('data', 'psikologs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'psikolog_id' => 'required|exists:daftar_psikolog,psikolog_id',
            'jadwal' => 'required|date',
            'nama_ps' => 'required|string|max:100',
            'email' => 'required|email',
            'keluhan' => 'nullable|string',
            'jam' => 'nullable',
        ]);

        HasilKonsultasi::create($request->all());

        // Redirect kembali ke halaman form (misal route konsultasi.create atau konsultasi.form)
        return redirect()->back()->with('success', 'Jadwal sudah dibuat');
    }

    public function destroy($id)
    {
        HasilKonsultasi::destroy($id);
        return redirect()->route('konsultasi.index')->with('success', 'Data berhasil dihapus.');
    }
}