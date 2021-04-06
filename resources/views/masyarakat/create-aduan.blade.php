@extends('template.masyarakat')
@section('title', 'Create Aduan')
@section('judul', 'Create Aduan')
@section('subjudul', 'Form Aduan')
@section('content')
<form action="/masyarakat-create-aduan" method="post" enctype="multipart/form-data">
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
      <label for="exampleInputEmail1">Tanggal Aduan</label>
      <input type="text" readonly class="form-control" id="exampleInputEmail1" value="{{date('Y-m-d')}}" name="tgl_aduan">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi Laporan</label>
      <textarea name="aduan" class="form-control" id="exampleInputPassword1" placeholder="Isi Laporan"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile"></label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
          <label class="custom-file-label" for="exampleInputFile">Bukti Foto</label>
        </div>
        <div class="input-group-append">
          <span class="input-group-text">Upload</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Save</button>
    </div>
</form>
@endsection
