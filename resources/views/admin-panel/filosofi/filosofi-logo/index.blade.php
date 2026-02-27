@extends('admin-panel.layouts.app')

@section('title', 'Filosofi Logo')

@section('content')
    <div class="container">
        <h3 class="mb-4">Data Filosofi Logo</h3>

        <a href="{{ route('filosofi-logo.create') }}" class="btn btn-primary mb-3">
            Tambah Data
        </a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>
                            @if ($item->gambar_logo)
                                <img src="{{ asset('storage/' . $item->gambar_logo) }}" width="80">
                            @endif
                        </td>
                        <td>{{ $item->nama_logo }}</td>
                        <td>{{ $item->deskripsi_logo }}</td>
                        <td>
                            <a href="{{ route('filosofi-logo.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('filosofi-logo.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
