@extends('admin-panel.layouts.app')

@section('title', 'Logo Kabinet')

@section('content')
<div class="container">
    <h4 class="mb-4">Logo Kabinet</h4>

    <div class="card shadow-sm p-4 rounded-4 text-center">

        @if($logo && $logo->logo_kabinet)
            <img src="{{ asset('storage/'.$logo->logo_kabinet) }}"
                 class="img-fluid mb-3"
                 style="max-width: 250px;">
        @else
            <img src="{{ asset('images/default.png') }}"
                 class="img-fluid mb-3"
                 style="max-width: 250px;">
        @endif

        @if($logo)
            <a href="{{ route('logo-kabinet.edit', $logo->id) }}"
               class="btn btn-primary">
               Edit Logo
            </a>
        @else
            <p class="text-danger">Data logo belum tersedia.</p>
        @endif

    </div>
</div>
@endsection
