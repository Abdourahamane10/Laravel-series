@extends('layouts.main');

@section('content')
<h2>Ajouter une nouvelle serie</h2> <br>

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
        <form action="{{ url('admin/series') }}" method="POST">
            @csrf
            <label for="title">title :</label>
            <input type="text" id="title" name="title"><br>
            <label for="content">content :</label>
            <textarea id="content" name="content" cols="30" rows="10" @class(['p-4', 'font-bold' => true])></textarea><br>
            <label for="acteurs">acteurs :</label>
            <textarea id="acteurs" name="acteurs" cols="15" rows="10" @class(['p-4', 'font-bold' => true])></textarea><br>
            <label for="url">url :</label>
            <input type="url" id="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30"><br>
            <label for="tags">tags :</label>
            <textarea id="tags" name="tags" cols="20" rows="10" @class(['p-4', 'font-bold' => true])></textarea><br>
            <label for="status">status :</label>
            <input type="text" id="status" name="status"><br>
            <button type="submit">Créer</button>
        </form>
    </div>
@endsection
