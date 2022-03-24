@extends('layouts.main');

@section('content')

<h2>Modifier la serie "{{ $serie->title }}"</h2> <br>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form">
        <form action="{{ route('series.update', ['series' => $serie->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">title :</label>
            <input type="text" id="title" name="title" value="{{ $serie->title }}"><br>
            <label for="content">content :</label>
            <textarea id="content" name="content" cols="30" rows="10">{{ $serie->content }}</textarea><br>
            <label for="acteurs">acteurs :</label>
            <textarea id="acteurs" name="acteurs" cols="15" rows="10">{{ $serie->acteurs }}</textarea><br>
            <label for="url">url :</label>
            <input type="url" id="url" name="url" value="{{ $serie->url }}"><br>
            <label for="tags">tags :</label>
            <textarea id="tags" name="tags" cols="20" rows="10">{{ $serie->tags }}</textarea><br>
            <label for="status">status :</label>
            <input type="text" id="status" name="status" value="{{ $serie->status }}"><br>
            <button type="submit">Modifier</button>
        </form>
    </div>
@endsection
