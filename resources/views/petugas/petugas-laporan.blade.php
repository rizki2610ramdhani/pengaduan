@extends('template.petugas')
@section('title', 'Create Tanggapan')
@section('judul', 'Create Tanggapan')
@section('subjudul', 'Form Tanggapan')
@section('content')
<form action="/petugas-lanjutan/{{$id}}" method="post">
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
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" readonly class="form-control" id="exampleInputEmail1" placeholder="Nama" value="{{Auth::user()->nama}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tanggal Tanggapan</label>
      <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d')}}" name="tgl_tanggapan">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi Tanggapan</label>
      <textarea name="tanggapan" class="form-control" id="exampleInputPassword1" placeholder="Isi tanggapan"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection
