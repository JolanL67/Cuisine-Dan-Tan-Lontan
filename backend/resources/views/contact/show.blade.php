@extends('layouts.app')

@section('title', 'Contact')

<link rel="stylesheet" href="css/showContact.css">

@section('content')

<style> table { background-color: white }</style>

<table class="table table-hover">
    <tr>
        <td>Numéro de téléphone</td>
        <td>{{ $contact->phone }}</td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>{{ $contact->mail }}</td>
    </tr>
    <tr>
        <td>Facebook</td>
        <td><a href="{{ $contact->facebook }}" target="_blank">{{ $contact->facebook }}</a> <img src="{{ asset('images/new-tab.svg') }}" alt="new_tab"></td>
    </tr>
    <tr>
        <td>Instagram</td>
        <td><a href="{{ $contact->instagram }}" target="_blank">{{ $contact->instagram }}</a> <img src="{{ asset('images/new-tab.svg') }}" alt="new_tab"></td>
    </tr>
    <tr>
        <td>Mis à jour le</td>
        <td>{{ date('d-m-Y G:i:s', strtotime($contact->updated_at)) }}</td>
    </tr>
    <tr>
        <td>Actions</td>
        <td>
            <a href="{{ route('contact.edit') }}">Modifier</a>
        </td>
    </tr>
</table>

@endsection
