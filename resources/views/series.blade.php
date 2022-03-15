@extends('layouts/main');

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
    </div>
@endsection
