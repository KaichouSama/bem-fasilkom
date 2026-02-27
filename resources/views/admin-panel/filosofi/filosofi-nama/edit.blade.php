@extends('admin-panel.layouts.app')

@section('title', 'Edit Filosofi Nama')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Filosofi Nama</h4>

    <form action="{{ route('filosofi-nama.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Kabinet</label>
            <input type="text"
                   name="nama_kabinet"
                   class="form-control"
                   value="{{ $data->nama_kabinet }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi_kabinet"
                      class="form-control"
                      rows="4"
                      required>{{ $data->deskripsi_kabinet }}</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
