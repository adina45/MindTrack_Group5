<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoodModel;
use App\Models\Tespsikologi;
use Carbon\Carbon;

class HomeController extends Controller{

public function index()
{
    // Ambil mood terakhir
    $latestMood = MoodModel::where('user_id', auth()->id())
                    ->latest()
                    ->first();

    // Ambil data untuk grafik 7 hari terakhir
    $last7Days = MoodModel::where('user_id', auth()->id())
        ->where('created_at', '>=', \Carbon\Carbon::now()->subDays(6)->startOfDay())
        ->orderBy('created_at')
        ->get()
        ->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->created_at)->format('D'); // Sen, Sel, Rab, dst.
        });

    $moodMap = ['sedih' => 1, 'marah' => 2, 'lelah' => 3, 'malas' => 4, 'biasa_aja' => 5, 'senang' => 6, 'semangat' => 7];

    $labels = [];
    $data = [];

    foreach (range(6, 0) as $i) {
        $date = \Carbon\Carbon::now()->subDays($i);
        $day = $date->format('D'); // ex: Mon, Tue, ...
        $labels[] = $day;

        $mood = optional($last7Days[$day] ?? null)->last()->mood ?? null;
        $data[] = $moodMap[$mood] ?? null;
    }

    // Ambil hasil tes psikologi terakhir
    $latestTest = Tespsikologi::where('user_id', auth()->id())
                    ->latest()
                    ->first();

    // Kirim semua data ke view dashboard
    return view('dashboard', compact('latestMood', 'labels', 'data', 'latestTest'));
}

}


