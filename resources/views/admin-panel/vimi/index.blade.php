@extends('admin-panel.layouts.app')

@section('title', 'Data Visi Misi')

@section('content')
    <div class="container mt-4">

        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">

                <h3 class="mb-4 fw-bold text-primary">Data Visi & Misi</h3>

                <h5 class="fw-bold">Visi</h5>
                <p class="text-muted">
                    {{ $vimi->visi }}
                </p>

                <h5 class="fw-bold mt-4">Misi</h5>
                <ul>
                    @foreach (array_filter(explode("\n", $vimi->misi)) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

                <a href="{{ route('vimi.edit', $vimi->id) }}" class="btn btn-primary mt-3">
                    Edit Data
                </a>

            </div>
        </div>

    </div>
@endsection
