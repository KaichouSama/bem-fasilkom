@extends('admin-panel.layouts.app')

@section('title', 'Edit Visi Misi')

@section('content')
    <div class="container mt-4">

        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">

                <h3 class="mb-4 fw-bold text-primary">Edit Visi & Misi</h3>

                <form action="{{ route('vimi.update', $vimi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="fw-bold">Visi</label>
                        <textarea name="visi" class="form-control" rows="3">{{ $vimi->visi }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Misi</label>
                        <textarea name="misi" class="form-control" rows="5">{{ $vimi->misi }}</textarea>

                        <small class="text-muted">
                            Pisahkan setiap misi dengan koma <br>
                            Contoh: Misi 1, Misi 2, Misi 3
                        </small>
                    </div>

                    <button class="btn btn-success">
                        Update Data
                    </button>

                    <a href="{{ route('vimi.index') }}" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>
@endsection
