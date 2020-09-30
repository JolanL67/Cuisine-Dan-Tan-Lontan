@extends('layouts.app')

@section('title', 'Presentation')

<link rel="stylesheet" href="css/showPresentation.css">

@section('content')

<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">Description</th>
          <th scope="col">Image description</th>
          <th scope="col">Image de fond</th>
          <th scope="col">Info de commande</th>
          <th scope="col">Info de paiement</th>
          <th scope="col">Modifié le</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
    <tr>
        <td>{{ Str::limit($presentation->description, 500) }}</td>
        <td>
            <img src="{{ $presentation->thumbnail }}" alt="image description">
        </td>
        <td>
            <img src="{{ $presentation->bg_image }}" alt="image de fond">
        </td>
        <td>{{ $presentation->command_info }}</td>
        <td>{{ $presentation->payment_info }}</td>
        <td>{{ date('d-m-Y G:i:s', strtotime($presentation->updated_at)) }}</td>
        <td><a href="{{ route('presentation.edit') }}">Modifier</a></td>
    </tr>
</tbody>
</table>

@endsection
