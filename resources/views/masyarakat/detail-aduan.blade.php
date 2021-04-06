@extends('template.masyarakat')
@section('title', 'Detail Aduan')
@section('judul', 'Detail')
@section('subjudul', 'Detail Aduan Saya')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Pengaduan</th>
        </tr>
      <tr>
        <th style="width: 10px">No</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>Foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($aduan as $au)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$au->tgl_aduan}}</td>
        <td>{{$au->aduan}}</td>
        <td>
          <div>
            <img src="{{asset('imagesDB/' . $au->foto)}}" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            @if($au->status == '0')
            <span class="badge bg-danger">Belum Diproses</span></td>
            @elseif($au->status =='proses')
            <span class="badge bg-warning">Diproses</span></td>
            @else
            <span class="badge bg-success">Selesai</span></td>
            @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  <hr>
  @foreach($tanggapan as $tg)
  @if($tg->pengaduan->status = 'selesai')
  <table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Tanggapan</th>
        </tr>
      <tr>
        <th style="width: 10px">NIK Petugas</th>
        <th>Nama Petugas</th>
        <th>Tanggal Tanggapan</th>
        <th>Tanggapan</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$tg->petugas->nik}}</td>
        <td>{{$tg->petugas->nama}}</td>
        <td>{{$tg->tgl_tanggapan}}</td>
        <td>{{$tg->tanggapan}}</td>
        <td>
            @if($tg->status == '0')
            <span class="badge bg-danger">Belum Diproses</span></td>
            @elseif($tg->status =='proses')
            <span class="badge bg-warning">Diproses</span></td>
            @else
            <span class="badge bg-success">Selesai</span></td>
            @endif
      </tr>
    </tbody>
  </table>
  @else

  @endif
  @endforeach
@endsection
