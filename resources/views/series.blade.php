@extends('layouts/main')

@section('content')
    <h1>Séries</h1><br>

    <div>
        <livewire:search />
        <ul class="utl">
            @foreach ($series as $serie)
                <li class="relative">
                    @if ($serie->media != "")
                    <a href="#"><img src="{{url('/media/'.$serie->media.'.jpg')}}" alt="media" height="200" width="200"/></a><br>
                @else
                    <a href="#"><img src="{{url('/media/mediaDefault.png')}}" alt="media" height="200" width="200"/></a><br>
                @endif

                    <div>
                      <a href="{{ route('series.show', ['id' => $serie->id]) }}">Titre : {{ $serie->title }}</a><br>
                      <p>Acteurs : {{ $serie->acteurs }}</p><br>
                      <p>&copy; Auteur : {{ $serie->author->name }}</p>
                    </div>
                </li><br><br>
            @endforeach
        </ul>
    </div><br><br>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <form action="{{ url('/series') }}" method="POST">
        @csrf
        <label for="content">Ajouter un commentaire :</label>
        <textarea id="content" name="content" cols="30" rows="10" placeholder="commentaires..."></textarea><br>
        <button type="submit">envoyer</button>
    </form>
</div><br><br>


<div>
    <h1>Commentaires :</h1><br>

    @foreach ($comments as $comment)
        <p>Titre de la série : {{ \App\Models\Serie::where('id',$comment->serie_id)->first()->title }}</p>
        <p>Commentaire : {{ $comment->content }}</p>
        <p>&copy; Author : {{ \App\Models\User::where('id',$comment->author_id)->first()->name }}</p><br>

    @endforeach
</div>

@endsection
