@extends('layouts/main');

@section('content')
    <h1>Séries</h1><br>

    <div>
        <livewire:search />


        <table>
            <tr>
                <th>TITLE</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($series as $serie)
            <tr>
                <td><a href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a> </td>
                <td><button type="button"><a href="{{ route('series.edit', [
                    'series' => $serie->id]) }}">edit</a></button></td>
                    <td><form action="{{ url('admin/series/'.$serie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                        </form></td>
            </tr>
            @endforeach
        </table>
        <br>
        <button type="button"><a href="{{ route('series.create') }}">Créer une nouvelle série</a></button>

    </div>


@endsection
