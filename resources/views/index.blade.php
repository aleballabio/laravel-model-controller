@extends('template.base')

@section('title', 'Movies')

@section('content')
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{ $movie->title }}</h2>
                <ul>
                    <li>Original Title: {{ $movie->original_title }}</li>
                    <li>Country: {{ $movie->nationality }}</li>
                    <li>Premiered: {{ $movie->date }}</li>
                    <li>Vote: {{ $movie->vote }}</li>
                </ul>
            </div>
        @endforeach
    </div>

@endsection
