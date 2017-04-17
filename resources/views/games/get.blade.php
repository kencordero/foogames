@extends('layouts.master')

@section('title')
    Show game
@endsection

@push('head')
    <link rel="stylesheet" href="/css/games/show.css" >
@endpush

@section('content')
    @if($title)
        <h1>Show game: {{ $title }}</h1>
    @else
        <h1>No game chosen</h1>
    @endif
@endsection

@push('body')
    <script src="/js/games/show.js"></script>
@endpush
