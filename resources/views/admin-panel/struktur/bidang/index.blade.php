@extends('admin-panel.layouts.app')

@section('title', 'Data Bidang')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Bidang</h4>
        <a href="{{ route('bidang.create') }}" class="btn btn-primary">
            + Tambah Bidang
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th width="5%">No</th>
                <th>Nama Bidang</th>
                <th>Deskripsi</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bidang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_bidang }}</td>
                    <td>{{ $item->deskripsi_bidang }}</td>
                    <td>
                        <a href="{{ route('bidang.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>
                        <form action="{{ route('bidang.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Data kosong</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
