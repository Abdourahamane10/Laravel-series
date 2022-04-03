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
        <form action="{{ url('admin/series') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">title :</label>
            <input type="text" id="title" name="title"><br>
            <label for="content">content :</label>
            <textarea id="content" name="content" cols="30" rows="10"></textarea><br>
            <label for="acteurs">acteurs :</label>
            <textarea id="acteurs" name="acteurs" cols="15" rows="10")></textarea><br>
            <label for="url">url :</label>
            <input type="url" id="url" name="url" placeholder="https://example.com" pattern="https://.*" size="30"><br>
            <label for="tags">tags :</label>
            <select id="tags" name="tags">
                <option value="action">Action</option>
                <option value="humour">Humour</option>
                <option value="amour">Amour</option>
                <option value="drama">Drama</option>
                <option value="policier">Policier</option>
                <option value="comique">Comique</option>
            </select><br>
            <label for="status">status :</label>
            <select id="status" name="status">
                <option value="En cours">En cours</option>
                <option value="Publiée">Publié</option>
                <option value="Modifiée">Modifié</option>
            </select>
            <label for="file">Choose a profile picture:</label>
            <input type="file"
            id="file" name="file" accept="image/png, image/jpeg"><br>

            <button type="submit">Créer</button>
        </form>
    </div>
@endsection
