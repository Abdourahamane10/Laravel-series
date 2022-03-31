@extends('layouts/main')

@section('content')
    <h1>Séries</h1><br>

    <div>
        <livewire:search />
        <ul>
            @foreach ($series as $serie)
                <li class="relative"><a
                        href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a></li>
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
