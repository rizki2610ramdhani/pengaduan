@extends('template.masyarakat')
@section('title', 'Dashbard Masyarakat')
@section('judul', 'Dashboard')
@section('subjudul', 'Daftar Aduan Saya')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>Tanggal Aduan</th>
        <th>Isi Laporan</th>
        <th>Foto</th>
        <th style="width: 40px">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($aduanuser as $au)
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
            <span class="badge bg-danger"><a href="/m-show-aduan/{{$au->id}}">Belum Diproses</a></span></td>
            @elseif($au->status =='proses')
            <span class="badge bg-warning"><a href="/m-show-aduan/{{$au->id}}">Diproses</a></span></td>
            @else
            <span class="badge bg-success"><a href="/m-show-aduan/{{$au->id}}">Selesai</a></span></td>
            @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
