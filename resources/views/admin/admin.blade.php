@extends('layouts/main')

@section('content')
    <h1>Séries</h1><br>

    <div>
        <livewire:search />


        <table>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>LAST MODIFICATION</th>
                <th colspan="2">ACTIONS</th>
            </tr>
            @foreach ($series as $serie)
            <tr><td>{{ $serie->id }}</td>
                <td><a href="{{ route('series.show', ['id' => $serie->id]) }}">{{ $serie->title }}</a> </td>
                <td>{{ $serie->updated_at }}</td>
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
        <br>

    </div>


@endsection
