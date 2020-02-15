@extends('layouts.app')

@section('contents')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card col-md-12">
      <div class="card-header">
        Edit Ebook
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('admin/ebook/'.$ebook->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <input type="text" class="form-control" name="name" placeholder="Nama Proker" value="{{ $ebook->name }}">
            <br>
            <input type="text" class="form-control" name="by" value="{{ $ebook->by }}" placeholder="Penulis">
            <br>
            @if($ebook->file != null)
            File Sudah Ada: {{ $ebook->file }}
            @endif
            <br>
            <input type="file" name="file">
            <br>
            <label>Jika Tidak Ingin Mengubah File, Jangan Upload Ulang Filenya</label>
            <br>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
@stop
