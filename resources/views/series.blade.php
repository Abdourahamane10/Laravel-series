@extends('layouts/main')

@section('content')
    <h1>Séries</h1><br>

    <div>
        <livewire:search />

            @foreach ($series as $serie)
            <?php
            $rating = \App\Models\Comment::where('serie_id',$serie->id)->avg('rating');
            ?>

            <ul class="utl">
                <li class="relative">
                    @if ($serie->media != "")
                    <a href="#"><img src="{{url('/media/'.$serie->media.'.jpg')}}" alt="media" height="200" width="200"/></a><br>
                @else
                    <a href="#"><img src="{{url('/media/mediaDefault.jpg')}}" alt="media" height="200" width="200"/></a><br>
                @endif

                    <div class="right-part">
                      <a href="{{ route('series.show', ['id' => $serie->id]) }}">Titre : {{ $serie->title }}</a><br>
                      <p> <div class="stars"><div class="percent" style="width: {{  ($rating*20).'%' }};"></div></div></p>
                    <br/><br/>
                      <p>Acteurs : {{ $serie->acteurs }}</p><br>
                      <p>&copy; Auteur : {{ $serie->author->name }}</p>
                    </div>
                </li><br><br>
            </ul>
            @endforeach

    </div>


@endsection
