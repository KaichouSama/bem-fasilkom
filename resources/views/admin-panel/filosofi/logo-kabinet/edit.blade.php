@extends('admin-panel.layouts.app')

@section('title', 'Logo Kabinet')

@section('content')
<div class="container">
    <h4 class="mb-4">Edit Logo Kabinet</h4>

    <div class="card shadow-sm p-4 rounded-4">

        <form action="{{ route('logo-kabinet.update', $logo->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Upload Logo Baru</label>
                <input type="file"
                       name="logo_kabinet"
                       class="form-control">
            </div>

            <div class="text-end">
                <a href="{{ route('logo-kabinet.index') }}"
                   class="btn btn-secondary">
                   Kembali
                </a>

                <button type="submit"
                        class="btn btn-success">
                    Simpan
                </button>
            </div>

        </form>

    </div>
</div>
@endsection
