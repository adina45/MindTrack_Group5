<?php

namespace App\Http\Controllers;

use App\Models\MoodModel;
use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function index(){
        return view('mood');
    }

    public function store(Request $request){
        $request->validate([
            'mood' => 'required|string',
            'note' => 'nullable|string',
        ]);

        MoodModel::create([
            'user_id' => auth()->id(),
            'mood' => $request->mood,
            'note' => $request->note,
        ]);

        return back()->with('success', 'Mood kamu hari ini: ' . $request->mood);
    }
}
