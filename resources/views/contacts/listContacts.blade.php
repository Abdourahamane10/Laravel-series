@extends('layouts/main')
<link href="{{ asset('css/contacts.css') }}" rel="stylesheet" type="text/css" />

@section('content')

<h3> Contacts :</h3>

<table>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    @foreach ( $contacts as $contact )
    <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->message }}</td>
    </tr>
    @endforeach
</table>

@endsection
