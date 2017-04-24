@extends('layouts.master')

@section('title')
    Movie: {{ $movie->title }}
@endsection

@section('content')
    <div class="item text-center">
        <h3>{{ $movie->title }} ({{ $movie->year_released }})</h3>
        <div>Directed by {{ $movie->director }}</div>
        <img src="{{ $movie->image_url }}">
    </div>
@endsection