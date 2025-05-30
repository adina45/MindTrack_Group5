<?php

namespace App\Http\Controllers;

use App\Models\DaftarPsikolog;
use Illuminate\Http\Request;

class DaftarPsikologController extends Controller
{
    public function index()
    {
        $psikologs = DaftarPsikolog::all();
        return view('psikolog.index', compact('psikologs'));
    }
}
