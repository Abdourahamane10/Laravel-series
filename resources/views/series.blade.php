@extends('layouts/main');

@section('content')
    <h1>Séries</h1><br>

    <ul>
        @foreach ($series as $serie)
            <li><a href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a></li>
        @endforeach
    </ul>
@endsection
