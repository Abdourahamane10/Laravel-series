@extends('layouts/main')

@section('content')
    <p> @if ($serie->media != "")
        <a href="#"><img src="{{url('/storage/media/'.$serie->media.'.jpg')}}" alt="" height="200" width="200"/></a><br>
        @else
        <a href="#"><img src="{{url('/storage/media/mediaDefault.png')}}" alt="" height="200" width="200"/></a><br>
        @endif</p>
    <p>Title : {{ $serie->title }}</p><br>
    <p> Content : {{ $serie->content }}</p><br>
    <h3>url : <a href="{{ $serie->url }}">{{ $serie->url }}</a></h3><br>
    <div class="pied de page">
        <footer>
            <p>&copy; Auteur : {{ $serie->author->name }}</p>
        </footer>
    </div>
@endsection
