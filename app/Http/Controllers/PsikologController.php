<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index()
    {
        $psikologs = [
            [
                'nama' => 'Dr. Andini Sari, M.Psi',
                'email' => 'andini@psikolog.com',
                'no_telepon' => '0812-3456-7890',
                'spesialisasi' => 'Psikologi Anak',
                'pengalaman' => 8,
                'foto' => 'marie.jpg',
            ],
            [
                'nama' => 'Dr. Rudi Hartono, M.Psi',
                'email' => 'rudi@psikolog.com',
                'no_telepon' => '0821-4567-8901',
                'spesialisasi' => 'Psikologi Klinis Dewasa',
                'pengalaman' => 12,
                'foto' => 'team-1.jpg',
            ],
            [
                'nama' => 'Dr. Maya Anindita, M.Psi',
                'email' => 'maya@psikolog.com',
                'no_telepon' => '0856-7890-1234',
                'spesialisasi' => 'Psikologi Pernikahan',
                'pengalaman' => 10,
                'foto' => 'team-2.jpg',
            ],
        ];

        return view('psikolog', compact('psikologs'));
    }
    

    public function psikologKonsultasi($nama)
    {
        // Anda bisa kirim nama ke view jika dibutuhkan
        return view('psikolog_konsultasi', compact('nama'));
    }
}


