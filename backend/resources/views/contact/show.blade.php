@extends('layouts.app')

@section('title', 'Contact')

<link rel="stylesheet" href="css/showPresentationContact.css">

@section('content')

<h1>Contact</h1>

<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">Numéro de téléphone</th>
          <th scope="col">E-mail</th>
          <th scope="col">Facebook</th>
          <th scope="col">Instagram</th>
          <th scope="col">Modifié le</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
    <tr>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->mail }}</td>
        <td><a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a></td>
        <td><a href="{{ $contact->instagram }}" target="_blank">{{ $contact->instagram }}</a> </td>
        <td>{{ $contact->updated_at ?? 'Non modifié' }}</td>
        <td>
            <a class="modifyLink" href="{{ route('contact.edit') }}">Modifier</a>
        </td>
    </tr>
</tbody>
</table>

@endsection
