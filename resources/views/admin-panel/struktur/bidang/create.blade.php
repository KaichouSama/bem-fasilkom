@extends('admin-panel.layouts.app')

@section('title', 'Data Bidang')

@section('content')
    <div class="container">
        <h4 class="mb-3">Tambah Bidang</h4>

        <form action="{{ route('bidang.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Bidang</label>
                <input type="text" name="nama_bidang" class="form-control" value="{{ old('nama_bidang') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi Bidang</label>
                <textarea name="deskripsi_bidang" class="form-control" rows="4" placeholder="Deskripsi singkat bidang" value="{{ old('deskripsi_bidang') }}"></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('bidang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
