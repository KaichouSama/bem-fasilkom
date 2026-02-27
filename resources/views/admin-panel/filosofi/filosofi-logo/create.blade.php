@extends('admin-panel.layouts.app')

@section('title', 'Tambah Filosofi Logo')

@section('content')
<div class="container">
    <h3>Tambah Filosofi Logo</h3>

    <form action="{{ route('filosofi-logo.store') }}" 
          method="POST" 
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Nama Logo</label>
            <input type="text" name="nama_logo" 
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi_logo" 
                      class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar_logo" 
                   class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
