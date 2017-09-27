@extends('layouts.master')

@section('title')
    Add movie
@endsection

@section('content')
    <div class="container"
    <form action="/movies/add" method="post">
        <label for="title">Title</label>
        <input name="title" id="title" type="text" placeholder="Enter the movie title">
        <br>

        <label>Year released</label>
        <input name="year_released" type="number" placeholder="2017">
        <br>

        <label>Image URL</label>
        <input name="image_url" type="url">
        <br>

        <input type="submit">
    </form>
    </div>
@endsection