@extends('layouts.app')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

@include('layouts.nav')

@section('content')

<style> table { background-color: white }</style>

<table>
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
