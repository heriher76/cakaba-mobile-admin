@extends('layouts.app')

@section('contents')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card col-md-12">
      <div class="card-header">
        Edit Acara
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('admin/calendar/'.$event->id) }}">
            {{ csrf_field() }}
            {{ method_field('put') }}
            <input type="text" class="form-control" name="name" placeholder="Nama Proker" value="{{ $event->name }}">
            <br>
            <input type="date" class="form-control" name="date" value="{{ $event->date }}">
            <br>
            <textarea name="description" class="form-control" placeholder="Deskripsi">{{ $event->description }}</textarea>
            <br>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
      </div>
    </div>
  </div>
@stop
