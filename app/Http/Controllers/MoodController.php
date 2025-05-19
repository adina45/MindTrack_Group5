<?php

namespace App\Http\Controllers;

use App\Models\MoodModel; // <--- pastikan pakai MoodModel
use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function index(){
        return view('mood');
    }

    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'mood' => 'required',
        ]);

        // Simpan ke database
        MoodModel::create([
            'mood' => $request->mood,
            'note' => $request->note, // jika ada input note
        ]);

        return back()->with('success', 'Mood kamu hari ini: ' . $request->mood);
    }
}

