@extends('template.admin')
@section('title', 'Create Petugas')
@section('judul', 'Create Petugas')
@section('subjudul', 'Form Petugas')
@section('content')
<form action="/admin-create-petugas" method="post">
    @csrf
    <div class="form-group">
    @if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
                                </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NIK</label>
        <input type="number" class="form-control" id="exampleInputEmail1" min="0" name="nik">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" id="exampleInputEmail1" name="password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Telepon</label>
        <input type="number" min="0" class="form-control" id="exampleInputEmail1" name="telp">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection
