<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            $role = Auth::user()->role;

            switch ($role) {
                case 0:
                    return redirect()->route('dashboard')->with('success', 'Login berhasil');
                case 1:
                    return redirect()->route('admin.dashboardadmin')->with('success', 'Anda login sebagai Admin.');
                case 2:
                    return redirect()->route('psikolog.dashboardpsikolog')->with('success', 'Anda login sebagai Psikolog.');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Role tidak dikenali.']);
        }
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
