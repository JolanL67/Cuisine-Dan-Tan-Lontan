@extends('layouts.app')

<link rel="stylesheet" href="css/browse.css">

@include('layouts.nav')

@section('content')

<h1>Liste du Menu</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Type</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Ingrédients</th>
      <th scope="col">Remise</th>
      <th scope="col">Nombre remisé</th>
      <th scope="col">Prix de la remise</th>
      <th scope="col">Modifié le</th>
      <th scope="col"><a href=""><button type="submit" class="btn btn-success">Ajouter un plat</button></a></th>
    </tr>
  </thead>
  <tbody>
    {{-- @dump($menu) --}}
    @foreach ($menu as $item)
        {{-- @dump($item->type) --}}
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}€</td>
            <td>{{$item->ingredient ?? 'Non renseigné'}}</td>
            <td>{{$item->is_discount ? 'Oui' : 'Non'}}</td>
            <td>{{$item->nb_unit}}</td>
            <td>{{$item->discount_price}}€</td>
            <td>{{$item->updated_at ?? 'Non modifié'}}</td>
            <td>
                <a href="">Modifier</a>
                <a href="" onclick="return confirm('Êtes vous sûr de vouloir supprimer cet élément ?')">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection