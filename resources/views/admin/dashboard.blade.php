@extends('template.admin')
@section('title', 'Dashbard Admin')
@section('judul', 'Dashboard')
@section('subjudul', 'Daftar Aduan Terbaru')
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
        @foreach($adt as $ad)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$ad->tgl_aduan}}</td>
        <td>{{$ad->aduan}}</td>
        <td>
          <div>
            <img src="{{asset('imagesDB/' . $ad->foto)}}" class="img-fluid mb-2" alt="red sample">
          </div>
        </td>
        <td>
            @if($ad->status == '0')
            <span class="badge bg-danger">Belum Diproses</span></td>
            @elseif($ad->status =='proses')
            <span class="badge bg-warning">proses</span></td>
            @else
            <span class="badge bg-success"><a href="/a-show-aduan/{{$ad->id}}">Selesai</a></span></td>
            @endif
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
