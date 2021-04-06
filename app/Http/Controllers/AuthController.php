<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pengaduan;
use App\Masyarakat;
use App\Petugas;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:masyarakat')->except('logout');
        $this->middleware('guest:petugas')->except('logout');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('petugas')->attempt($request->only('username', 'password'))) {
            $user = Auth::guard('petugas')->user();
            if ($user->level == "admin") {
                return redirect('/admin-dashboard');
            } elseif ($user->level == "petugas") {
                return redirect('/petugas-dashboard');
            }
        } else if (Auth::guard('masyarakat')->attempt($request->only('username', 'password'))) {
            return redirect('/masyarakat-dashboard');
        } else {
            return redirect('/login')->with('danger', 'Email atau Password anda salah');
        }
    }

    public function logout()
    {
        if (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
            return redirect('/login')->with('status', 'Anda berhasil logout');
        } else if (Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();
            return redirect('/login')->with('status', 'Anda berhasil logout');
        }
    }
}
