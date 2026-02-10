@extends('admin-panel.layouts.app')

@section('title', 'Edit Hero')

@section('content')
    <h2>Edit Hero</h2>

    <form action="{{ route('hero.update', $hero->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ $hero->title }}">

        <br><br>

        <label>Subtitle</label>
        <input type="text" name="subtitle" value="{{ $hero->subtitle }}">

        <br><br>

        <button type="submit">Update</button>
    </form>

@endsection
