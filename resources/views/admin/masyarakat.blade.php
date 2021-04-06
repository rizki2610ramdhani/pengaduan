@extends('template.admin')
@section('title', 'Daftar Masyarakat')
@section('judul', 'Masyarakat')
@section('subjudul', 'Daftar Masyarakat')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Telepon</th>
      </tr>
    </thead>
    <tbody>
        @foreach($adt as $ad)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$ad->nik}}</td>
        <td>{{$ad->nama}}</td>
        <td>{{$ad->username}}</td>
        <td>{{$ad->telp}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
