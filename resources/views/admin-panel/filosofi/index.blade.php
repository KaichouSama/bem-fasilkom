@extends('admin-panel.layouts.app')

@section('title', 'Data Filosofi')

@section('content')

    <div class="container mt-4">

        <h2 class="mb-4">Data Filosofi</h2>

        <div class="card shadow">
            <div class="card-body">

                <p><b>Nama Kabinet:</b> {{ $filosofi->nama_kabinet }}</p>

                <p><b>Deskripsi 1:</b><br>
                    {{ $filosofi->deskripsi1 }}
                </p>

                <p><b>Deskripsi 2:</b><br>
                    {{ $filosofi->deskripsi2 }}
                </p>

                <p><b>Logo:</b></p>
                <img
                    src="{{ $filosofi->logo == 'default.png' ? asset('images/default.png') : asset('storage/' . $filosofi->logo) }}">
                <br><br>

                <a href="{{ route('filosofi.edit', $filosofi->id) }}" class="btn btn-primary">
                    Edit
                </a>

            </div>
        </div>

    </div>

@endsection
