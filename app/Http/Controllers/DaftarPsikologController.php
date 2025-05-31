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

    public function create()
{
    return view('psikolog.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:daftar_psikolog,email',
    ]);

    DaftarPsikolog::create($request->only(['nama', 'email']));

    return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil ditambahkan.');
}

public function edit($id)
{
    $psikolog = DaftarPsikolog::findOrFail($id);
    return view('psikolog.edit', compact('psikologs'));
}

public function update(Request $request, $id)
{
    $psikolog = DaftarPsikolog::findOrFail($id);

    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:daftar_psikolog,email,' . $id . ',psikolog_id',
    ]);

    $psikolog->update($request->only(['nama', 'email']));

    return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil diperbarui.');
}

public function destroy($id)
{
    $psikolog = DaftarPsikolog::findOrFail($id);
    $psikolog->delete();

    return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil dihapus.');
}

}