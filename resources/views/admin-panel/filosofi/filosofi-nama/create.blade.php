@extends('admin-panel.layouts.app')

@section('title', 'Tambah Filosofi Nama')

@section('content')
<div class="container">
    <h4 class="mb-4">Tambah Filosofi Nama</h4>

    <form action="{{ route('filosofi-nama.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Kabinet</label>
            <input type="text" name="nama_kabinet"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi_kabinet"
                      class="form-control"
                      rows="4" required></textarea>
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
