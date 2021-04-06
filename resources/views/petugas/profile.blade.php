@extends('template.petugas')
@section('title', 'Profile Petugas')
@section('judul', 'Profile')
@section('subjudul', 'Profile Petugas')
@section('content')
<table >
    <thead>
    <tbody>
      <tr>
        <td style="width: 20px">NIK</td>
        <td style="width: 40px">:</td>
        <td>{{Auth::user()->nik}}</td>
      </tr>
      <tr>
        <td style="width: 20px">Nama</td>
        <td style="width: 40px">:</td>
        <td>{{Auth::user()->nama}}</td>
      </tr>
      <tr>
        <td style="width: 20px">Username</td>
        <td style="width: 40px">:</td>
        <td>{{Auth::user()->username}}</td>
      </tr>
      <tr>
        <td style="width: 20px">Telepon</td>
        <td style="width: 40px">:</td>
        <td>{{Auth::user()->telp}}</td>
      </tr>
      <tr>
        <td style="width: 20px">Level</td>
        <td style="width: 40px">:</td>
        <td>{{Auth::user()->level}}</td>
      </tr>
    </tbody>
  </table>
@endsection
