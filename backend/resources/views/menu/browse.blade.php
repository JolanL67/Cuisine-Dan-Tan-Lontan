@extends('layouts.app')

@section('title', 'Liste des plats')

@section('styles')
    <link rel="stylesheet" href="css/showMenu.css">
@endsection

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
    <th scope="col"><a href="{{ route('menu.add.view') }}"><button type="submit" class="btn btn-success">Ajouter un plat</button></a></th>
    </tr>
  </thead>
  <tbody>
    {{-- @dump($menu) --}}
    @foreach ($menu as $item)
        {{-- @dump($item->type) --}}
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->type}}</td>
            <td class="itemName">{{$item->name}}</td>
            <td>{{$item->price}}€</td>
            <td>{{$item->ingredient ?? 'Non renseigné'}}</td>
            <td>{{$item->is_discount ? 'Oui' : 'Non'}}</td>
            <td>{{$item->nb_unit ?? '0'}}</td>
            <td>{{$item->discount_price ?? '0'}}€</td>
            <td>{{$item->updated_at ?? 'Non modifié'}}</td>
            <td>
                <a class="modifyLink" href="{{ route('menu.edit', ['id' => $item->id]) }}">Modifier</a>
                <form class="formDelete" action="{{ route('menu.delete', ['id' => $item->id]) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-outline-danger deleteButton">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $menu->links() }}

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Supprimer un plat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            <button id="confirmDelete" type="button" class="btn btn-danger">Supprimer</button>
        </div>
    </div>
  </div>
</div>

@endsection
