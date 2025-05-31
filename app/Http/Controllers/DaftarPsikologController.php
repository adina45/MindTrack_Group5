<?php

namespace App\Http\Controllers;

use App\Models\DaftarPsikolog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarPsikologController extends Controller
{
    public function index()
    {
        $psikologs = DaftarPsikolog::all();
        return view('psikolog.tabelpsikolog', compact('psikologs'));
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['nama', 'email']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_psikolog', 'public');
        }

        DaftarPsikolog::create($data);

        return redirect()->route('psikolog.tabelpsikolog')->with('success', 'Data psikolog berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $psikolog = DaftarPsikolog::findOrFail($id);
        return view('psikolog.edit', compact('psikolog'));
    }

    public function update(Request $request, $id)
    {
        $psikolog = DaftarPsikolog::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:daftar_psikolog,email,' . $id . ',psikolog_id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['nama', 'email']);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($psikolog->foto && Storage::disk('public')->exists($psikolog->foto)) {
                Storage::disk('public')->delete($psikolog->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_psikolog', 'public');
        }

        $psikolog->update($data);

        return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $psikolog = DaftarPsikolog::findOrFail($id);
        
        // Hapus foto jika ada
        if ($psikolog->foto && Storage::disk('public')->exists($psikolog->foto)) {
            Storage::disk('public')->delete($psikolog->foto);
        }
        
        $psikolog->delete();

        return redirect()->route('psikolog.tabelpsikolog')->with('success', 'Data psikolog berhasil dihapus.');
    }
}
