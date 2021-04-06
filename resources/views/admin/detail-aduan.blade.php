@extends('template.masyarakat')
@section('title', 'Detail Aduan')
@section('judul', 'Detail')
@section('subjudul', 'Detail Aduan')
@section('content')
@foreach($tanggapan as $tg)
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
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$tg->pengaduan->tgl_aduan}}</td>
        <td>{{$tg->pengaduan->aduan}}</td>
        <td>
          <div>
            <img src="{{asset('imagesDB/' . $tg->pengaduan->foto)}}" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            @if($tg->pengaduan->status == '0')
            <span class="badge bg-danger">Belum Diproses</span></td>
            @elseif($tg->pengaduan->status =='proses')
            <span class="badge bg-warning">Diproses</span></td>
            @else
            <span class="badge bg-success">Selesai</span></td>
            @endif
      </tr>
    </tbody>
  </table>
  <hr>
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
