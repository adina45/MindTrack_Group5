<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardpsikologController extends Controller
{
    public function index()
    {
        return view('psikolog.dashboardpsikolog');
    }
}
