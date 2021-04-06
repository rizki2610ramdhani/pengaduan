<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Exports\PengaduanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;


class AdminController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }
    public function postregister(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:36|min:3',
            'nik' => 'required|max:16|min:10|unique:masyarakat,nik||unique:petugas,nik',
            'username' => 'required|max:25|min:5|unique:masyarakat,username||unique:petugas,username',
            'password' => 'required|min:8|max:32',
            'telp' => 'required|max:13|min:10|unique:masyarakat,telp||unique:petugas,telp'
        ]);

        Petugas::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => 'admin'
        ]);
        return redirect('/login');
    }

    public function dashboard()
    {
        $adt = Pengaduan::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('adt'));
    }
    public function masyarakat()
    {
        $adt = Masyarakat::orderBy('created_at', 'desc')->get();
        return view('admin.masyarakat', compact('adt'));
    }
    public function petugas()
    {
        $adt = Petugas::where('level', 'petugas')->orderBy('created_at', 'desc')->get();
        return view('admin.petugas', compact('adt'));
    }
    public function show($id)
    {
        $tanggapan =  Tanggapan::where('id', $id)->get();
        return view('admin.detail-aduan', compact('tanggapan'));
    }

    public function createpetugas()
    {
        return view('admin.create-petugas');
    }
    public function postpetugas(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:36|min:3',
            'nik' => 'required|max:16|min:10|unique:masyarakat,nik||unique:petugas,nik',
            'username' => 'required|max:25|min:5|unique:masyarakat,username||unique:petugas,username',
            'password' => 'required|min:8|max:32',
            'telp' => 'required|max:13|min:10|unique:masyarakat,telp||unique:petugas,telp'
        ]);
        Petugas::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => 'petugas'
        ]);
        return redirect('/admin-daftar-petugas');
    }
    public function profile()
    {
        return view('petugas.profile');
    }
}
