@extends('admin-panel.layouts.app')

@section('title', 'Filosofi Nama')

@section('content')
<div class="container">
    <h4 class="mb-4">Filosofi Nama</h4>

    <a href="{{ route('filosofi-nama.create') }}" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card p-3 shadow-sm">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Kabinet</th>
                    <th>Deskripsi</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $item)
                    <tr>
                        <td>{{ $item->nama_kabinet }}</td>
                        <td>{{ $item->deskripsi_kabinet }}</td>
                        <td>
                            <a href="{{ route('filosofi-nama.edit', $item->id) }}"
                               class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('filosofi-nama.destroy', $item->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            Data belum tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
