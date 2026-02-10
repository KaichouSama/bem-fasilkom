@extends('admin-panel.layouts.app')

@section('title', 'Data Hero')

@section('content')
    <h2>Data Hero</h2>

    <p><b>Title:</b> {{ $hero->title }}</p>
    <p><b>Subtitle:</b> {{ $hero->subtitle }}</p>

    <a href="{{ route('hero.edit', $hero->id) }}">
        Edit Hero
    </a>
@endsection
