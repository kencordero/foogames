@extends('layouts.master')

@section('title')
    Movies
@endsection

@section('content')
    <div>
        @foreach ($movies as $movie)
            <div class="item">
                <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>{{ $movie->year_released ? ', '.$movie->year_released : '' }}</p>
            </div>
        @endforeach
    </div>
@endsection