@extends('admin-panel.layouts.app')

@section('title', 'Edit Filosofi')

@section('content')

    <div class="container mt-4">
        <h2>Edit Filosofi</h2>

        <form action="{{ route('filosofi.update', $filosofi->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Kabinet</label>
                <input type="text" name="nama_kabinet" class="form-control" value="{{ $filosofi->nama_kabinet }}">
            </div>

            <div class="mb-3">
                <label>Deskripsi 1</label>
                <textarea name="deskripsi1" class="form-control">{{ $filosofi->deskripsi1 }}</textarea>
            </div>

            <div class="mb-3">
                <label>Deskripsi 2</label>
                <textarea name="deskripsi2" class="form-control">{{ $filosofi->deskripsi2 }}</textarea>
            </div>

            <div class="mb-3">
                <label>Logo Baru</label>
                <input type="file" name="logo" class="form-control">
            </div>

            <button class="btn btn-success">Update</button>

        </form>
    </div>

@endsection
