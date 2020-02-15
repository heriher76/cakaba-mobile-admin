@extends('layouts.app')

@section('contents')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card col-md-12">
      <div class="card-header">
        Tambah Ebook
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('admin/ebook') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="name" placeholder="Judul Buku">
            <br>
            <input type="text" class="form-control" name="by" placeholder="Penulis">
            <br>
            <input type="file" name="file">
            <br><br>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
@stop
