@extends('layouts/main')

@section('content')
    <h1>Home</h1>
    <h2>Bienvenu dans le site Laravel Séries</h2>
    <br>
    <!--{{-- > //$series <! --}}-->
    <ul class="utl">
        @foreach ($series as $serie)
            <li> @if ($serie->media != "")
                <a href="#"><img src="{{url('/media/'.$serie->media.'.jpg')}}" alt="" height="200" width="200"/></a><br>
                @else
                <a href="#"><img src="{{url('/media/mediaDefault.png')}}" alt="" height="200" width="200"/></a><br>
                @endif

                <div>
                  <a href="{{ route('series.show', ['id' => $serie->id]) }}">Title : {{ $serie->title }}</a><br>
                  <p>Acteurs : {{ $serie->acteurs }}</p><br>
                  <p>&copy; Auteur : {{ $serie->author->name }}</p><br><br>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
