@extends('layouts/main')

@section('content')
    <p>{{ $serie->title }}</p>
    <p>{{ $serie->content }}</p><br>
    <h3>url : <a href="{{ $serie->url }}">{{ $serie->url }}</a></h3><br>
    <div class="pied de page">
        <footer>
            <p>&copy; Auteur : {{ $serie->author->name }}</p>
        </footer>
    </div>
@endsection
