@extends('admin-panel.layouts.app')

@section('title', 'Data Bidang')

@section('content')
    <div class="container">
        <h4 class="mb-3">Edit Bidang</h4>

        <form action="{{ route('bidang.update', $bidang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Bidang</label>
                <input type="text" name="nama_bidang" class="form-control"
                    value="{{ old('nama_bidang', $bidang->nama_bidang) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi Bidang</label>
                <textarea name="deskripsi_bidang" class="form-control" rows="4" value="{{ old('deskripsi_bidang', $bidang->deskripsi_bidang) }}">{{ $bidang->deskripsi_bidang }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('bidang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
@endsection
