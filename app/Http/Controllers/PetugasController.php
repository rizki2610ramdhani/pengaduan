<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Petugas;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;

class PetugasController extends Controller
{
    //dashboard petugas
    public function dashboard()
    {
        $tanggapan = Tanggapan::where('petugas_nik', Auth::user()->nik)->orderBy('created_at', 'desc')->get();
        return view('petugas.dashboard', compact('tanggapan'));
    }
    public function show($id)
    {
        $tanggapan =  Tanggapan::where('id', $id)->get();
        return view('petugas.detail-tanggapan', compact('tanggapan'));
    }
    public function aduan()
    {
        $pengaduan =  Pengaduan::where('status', '0')->get();
        return view('petugas.daftar-aduan', compact('pengaduan'));
    }
    public function proses($id)
    {
        $edit = Pengaduan::where('id', $id)->first();
        $edit->status = "proses";
        Tanggapan::create([
            'pengaduan_id' => $id,
            'petugas_nik' => Auth::user()->nik,
        ]);
        $edit->save();
        return redirect('/petugas-dashboard');
    }
    public function lanjutan($id)
    {
        return view('petugas.petugas-laporan', compact('id'));
    }

    public function postlanjutan(Request $request, $id)
    {
        $request->validate([
            'tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
        ]);
        $edit = Tanggapan::where('id', $id)->first();
        $edit->tanggapan = $request->tanggapan;
        $edit->tgl_tanggapan = $request->tgl_tanggapan;
        $edit->save();

        $editp = Pengaduan::where('id', $edit->pengaduan_id)->first();
        $editp->status = "selesai";
        $editp->save();
        return redirect('/petugas-dashboard');
    }
    public function profile()
    {
        return view('petugas.profile');
    }
}
