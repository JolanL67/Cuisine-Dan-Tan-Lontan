@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@include('layouts.nav')

@section('content')


<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Modification d\'un plat') }}</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="body-card">

    <form action="{{ route('menu.update', ['id' => $menu->id]) }}" method="post" class="formAdd">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="type" class="label-login">{{ __('Type de plat') }}</label>
            <div>
                <select name="type" class="input-add">
                    <option value="Plats chaud" {{ $menu->type == 'Plats chaud' ? 'selected' : '' }}>Plats chaud</option>
                    <option value="Accompagnements" {{ $menu->type == 'Accompagnements' ? 'selected' : '' }}>Accompagnements</option>
                    <option value="Apéritif Créole" {{ $menu->type == 'Apéritif Créole' ? 'selected' : '' }}>Apéritif Créole</option>
                    <option value="Gâteaux fait Maison" {{ $menu->type == 'Gâteaux fait Maison' ? 'selected' : '' }}>Gâteaux fait Maison</option>
                    <option value="Boucherie" {{ $menu->type == 'Boucherie' ? 'selected' : '' }}>Boucherie</option>
                    <option value="Nos sandwichs réunionnais" {{ $menu->type == 'Nos sandwichs réunionnais' ? 'selected' : '' }}>Nos sandwichs réunionnais</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="name" class="label-login">{{ __('Nom du plat') }}</label>
            <div>
            <input type="text" name="name" class="input-add" placeholder="Le nom de votre plat..." value="{{$menu->name}}">
            </div>
        </div>
        
        <div class="form-group">
            <label for="price" class="label-login">{{ __('Prix du plat') }}</label>
            <div>
                <input type="text" name="price" class="input-add" placeholder="Le prix de votre plat..." value="{{$menu->price}}">
            </div>
        </div>
        
        <div class="form-group">
            <label for="ingredient" class="label-login">{{ __('Ingrédients (optionnel)') }}</label>
            <div>
                <textarea name="ingredient" cols="41" rows="10" placeholder="Vos ingrédients...">{{$menu->ingredient}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="is_discount" class="label-login">{{ __('Remise') }}</label>
            <div>
                <select name="is_discount" class="input-add">
                    <option value="0" {{ $menu->is_discount == 0 ? 'selected' : '' }}>Non</option>
                    <option value="1" {{ $menu->is_discount == 1 ? 'selected' : '' }}>Oui</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="nb_unit" class="label-login">{{ __('Nombre remisé (optionnel)') }}</label>
            <div>
                <input type="text" name="nb_unit" class="input-add" placeholder="Nombre de produits pour la remise..." value="{{$menu->nb_unit}}">
            </div>
        </div>

        <div class="form-group">
            <label for="discount_price" class="label-login">{{ __('Prix de la remise (optionnel)') }}</label>
            <div>
                <input type="text" name="discount_price" class="input-add" placeholder="Montant de la remise..." value="{{$menu->discount_price}}">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Modifier le plat</button></a>

    </form>

    </div>
</div>

@endsection