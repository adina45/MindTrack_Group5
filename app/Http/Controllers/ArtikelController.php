<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
            $data = Artikel::all();
    return view('artikel.index', compact('data'));
    }

    public function store(Request $request) {
        return Artikel::create($request->all());
    }

    public function show($id) {
        return Artikel::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());
        return $artikel;
    }

    public function destroy($id) {
        return Artikel::destroy($id);
    }
}