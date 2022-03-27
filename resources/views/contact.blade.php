@extends('layouts/main');

@section('content')
    <h1>Contact</h1><br>

    <h3>Créer un nouveau contact</h3>

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
        <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <label for="name">Name :</label>
            <input type="text" id="name" name="name"><br>
            <label for="email">email :</label>
            <input type="email" id="email" name="email"><br>
            <label for="message">message :</label>
            <textarea id="message" name="message" cols="30" rows="10"></textarea><br>
            <button type="submit">envoyer</button>
        </form>
    </div>
@endsection
