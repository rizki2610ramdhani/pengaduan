<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Masyarakat;

use App\Pengaduan;
use App\Tanggapan;
use App\Petugas;

class MasyarakatController extends Controller
{
    public function register()
    {
        return view('auth.register');
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
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp
        ]);
        return redirect('/login');
    }

    public function dashboard()
    {
        $aduanuser = Pengaduan::where('nik', Auth::user()->nik)->orderBy('created_at', 'desc')->get();
        return view('Masyarakat.dashboard', compact('aduanuser'));
    }

    public function show($id)
    {
        $aduan =  Pengaduan::where('id', $id)->get();
        $tanggapan =  Tanggapan::where('pengaduan_id', $id)->get();
        return view('masyarakat.detail-aduan', compact('aduan', 'tanggapan'));
    }

    public function create()
    {
        return view('masyarakat.create-aduan');
    }

    public function postcreate(Request $request)
    {
        $request->validate([
            'tgl_aduan' => 'required',
            'aduan' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5048'
        ]);
        $input = $request->all();
        $imageName = time() . '.' . request()->foto->getClientOriginalExtension();
        $input['foto'] = $imageName;
        request()->foto->move(public_path('imagesDB'), $imageName);

        Pengaduan::create([
            'nik' => Auth::user()->nik,
            'tgl_aduan' => $input['tgl_aduan'],
            'aduan' => $input['aduan'],
            'foto' => $input['foto'],
            'status' => '0'
        ]);
        return redirect('/masyarakat-dashboard');
    }

    public function profile(Request $request)
    {
        return view('masyarakat.profile');
    }
}
