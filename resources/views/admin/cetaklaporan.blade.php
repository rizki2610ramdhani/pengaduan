@extends('template.admin')
@section('title', 'Cetak Laporan')
@section('judul', 'Cetak')
@section('subjudul')
<a href="/admin-cetak-l">Cetak Laporan</a>
@endsection
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>NIK Petugas</th>
        <th>Nama Petugas</th>
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $ad)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$ad->masyarakat->nik}}</td>
        <td>{{$ad->masyarakat->nama}}</td>
        <th>{{$ad->tgl_aduan}}</th>
        <th>{{$ad->aduan}}</th>
        <th>{{$ad->tanggapan->petugas->nik}}</th>
        <th>{{$ad->tanggapan->petugas->nama}}</th>
        <th>{{$ad->tanggapan->tgl_tanggapan}}</th>
        <th>{{$ad->tanggapan->tanggapan}}</th>
        <td>
            @if($ad->status == '0')
            <span>Belum Diproses</span></td>
            @elseif($ad->status =='proses')
            <span>proses</span></td>
            @else
            <span>Selesai</span></td>
            @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
