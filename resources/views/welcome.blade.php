@extends('layouts/main');

@section('content')
    <h1>Home</h1>
    <h2>Bienvenu dans le site Laravel Séries</h2>
    <br>
    <!--{{-- > //$series <! --}}-->
    <ul>
        @foreach ($series as $serie)
            <li><a href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a></li>
        @endforeach
    </ul>
@endsection
