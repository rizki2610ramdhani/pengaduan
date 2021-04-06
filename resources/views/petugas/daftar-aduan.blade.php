
@extends('template.petugas')
@section('title', 'Daftar Aduan')
@section('judul', 'Pengaduan')
@section('subjudul', 'Daftar Pengaduan Yang Belum Diproses')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Pengadu</th>
        <th>Tanggal Pengaduan</th>
        <th>Aduan</th>
        <th style="width: 40px">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($pengaduan as $aduan)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$aduan->masyarakat->nik}}</td>
        <td>{{$aduan->masyarakat->nama}}</td>
        <td>{{$aduan->tgl_aduan}}</td>
        <td>{{$aduan->aduan}}</td>
        <td>
            <a href="/petugas-proses/{{$aduan->id}}" class="btn btn-warning">
                Proses sekarang
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
