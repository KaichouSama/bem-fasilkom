@extends('admin-panel.layouts.app')

@section('title', 'Edit Filosofi Logo')

@section('content')
<div class="container">
    <h3>Edit Filosofi Logo</h3>

    <form action="{{ route('filosofi-logo.update', $data->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Logo</label>
            <input type="text"
                   name="nama_logo"
                   value="{{ $data->nama_logo }}"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi_logo"
                      class="form-control"
                      required>{{ $data->deskripsi_logo }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>

            @if($data->gambar_logo)
                <img src="{{ asset('storage/'.$data->gambar_logo) }}"
                     width="120"
                     class="mb-2">
            @else
                <p class="text-muted">Tidak ada gambar</p>
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file"
                   name="gambar_logo"
                   class="form-control">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('filosofi-logo.index') }}"
           class="btn btn-secondary">
           Kembali
        </a>

    </form>
</div>
@endsection
