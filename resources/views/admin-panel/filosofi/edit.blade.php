@extends('admin-panel.layouts.app')

@section('title', 'Edit Filosofi')

@section('content')

    <div class="container mt-4" style="max-width:900px;">
        <h3 class="mb-4 fw-bold">Edit Filosofi Kabinet</h3>

        <form action="{{ route('filosofi.update', $filosofi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <!-- Logo Lama -->
            <div class="mb-4 text-center">
                <label class="form-label fw-semibold d-block">Logo Saat Ini</label>

                <img src="{{ $filosofi->logo_kabinet == 'default.png' ? asset('images/default.png') : asset('storage/' . $filosofi->logo_kabinet) }}"
                    class="img-fluid mb-2" style="max-width:160px">

                <div class="text-muted small">
                    Upload logo_kabinet baru jika ingin mengganti
                </div>
            </div>

            <!-- Upload Logo Kabinet -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Ganti Logo Kabinet</label>
                <input type="file" name="logo_kabinet" class="form-control">
            </div>

            <!-- Deskripsi Nama -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Filosofi Nama</label>
                <textarea name="filosofi_nama" class="form-control" rows="8"
                    placeholder="Tekan ENTER untuk membuat paragraf baru...">{{ $filosofi->filosofi_nama }}</textarea>
            </div>

            <!-- Deskripsi Logo -->
            <div class="mb-4">
                <label class="form-label fw-semibold">Filosofi Logo</label>
                <textarea name="filosofi_logo" class="form-control" rows="8" placeholder="Lanjutan filosofi...">{{ $filosofi->filosofi_logo }}</textarea>
            </div>

            <!-- Tombol -->
            <div class="d-flex gap-2">
                <button class="btn btn-success px-4">Update</button>
                <a href="{{ route('filosofi.index') }}" class="btn btn-secondary">Kembali</a>
            </div>

        </form>
    </div>

@endsection
