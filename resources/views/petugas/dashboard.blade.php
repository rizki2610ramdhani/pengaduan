@extends('template.petugas')
@section('title', 'Dashbard Petugas')
@section('judul', 'Dashboard')
@section('subjudul', 'Daftar Aduan Ditanggapi')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>Pengadu</th>
        <th>Tanggal Pengaduan</th>
        <th>Aduan</th>
        <th>foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($tanggapan as $tgp)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$tgp->pengaduan->masyarakat->nama}}</td>
        <td>{{$tgp->pengaduan->tgl_aduan}}</td>
        <td>{{$tgp->pengaduan->aduan}}</td>
        <td><div>
            <img src="{{asset('imagesDB/' . $tgp->pengaduan->foto)}}" class="img-fluid mb-2" alt="red sample">
          </div></td>
        <td>
            @if($tgp->pengaduan->status == "0")
            <span class="badge bg-danger"><a href="/p-show-aduan/{{$tgp->id}}">Belum Diproses</a></span></td>
            @elseif($tgp->pengaduan->status =="proses")
            <span class="badge bg-warning"><a href="/p-show-aduan/{{$tgp->id}}">Diproses</a></span></td>
            @else
            <span class="badge bg-success"><a href="/p-show-aduan/{{$tgp->id}}">Selesai</a></span></td>
            @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
