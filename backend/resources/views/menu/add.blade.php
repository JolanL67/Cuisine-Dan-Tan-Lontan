@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@include('layouts.nav')

@section('content')

{{-- A voir pour lundi : 
    - Traduire l'email de reset password V
    https://laraveldaily.com/mail-notifications-customize-templates/ V
    - Garder la data dans les input sans erreurs dans les formulaires quand il y a une erreur sur un input
    - Quand on met Non a l'input de remise, ne pas afficher l'input Nombre remisé, et l'input prix de la remise, et les afficher
    quand on met Oui à l'input de remise
--}}


<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Ajout d\'un plat') }}</div>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    {{-- @dump($errors) --}}

    <div class="body-card">

    <form action="{{ route('menu.add') }}" method="post" class="formAdd">
        @csrf
        <div class="form-group">
            <label for="type" class="label-login">{{ __('Type de plat') }}</label>
            <div>
                <select name="type" class="input-add">
                    <option value="" selected disabled>Choisissez votre type de plat</option>
                    <option value="Plats chaud">Plats chaud</option>
                    <option value="Accompagnements">Accompagnements</option>
                    <option value="Apéritif Créole">Apéritif Créole</option>
                    <option value="Gâteaux fait Maison">Gâteaux fait Maison</option>
                    <option value="Boucherie">Boucherie</option>
                    <option value="Nos sandwichs réunionnais">Nos sandwichs réunionnais</option>
                </select>
                @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="name" class="label-login">{{ __('Nom du plat') }}</label>
            <div>
                <input type="text" id="name" name="name" class="input-add" placeholder="Le nom de votre plat...">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="price" class="label-login">{{ __('Prix du plat') }}</label>
            <div>
                <input type="text" name="price" class="input-add" placeholder="Le prix de votre plat...">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>
        
        <div class="form-group">
            <label for="ingredient" class="label-login">{{ __('Ingrédients (optionnel)') }}</label>
            <div>
                <textarea name="ingredient" cols="41" rows="10" placeholder="Vos ingrédients..."></textarea>
                    @error('ingredient')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="is_discount" class="label-login">{{ __('Remise') }}</label>
            <div>
                <select name="is_discount" class="input-add">
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
                    @error('is_discount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="nb_unit" class="label-login">{{ __('Nombre remisé (optionnel)') }}</label>
            <div>
                <input type="text" name="nb_unit" class="input-add" placeholder="Nombre de produits pour la remise...">
                    @error('nb_unit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="discount_price" class="label-login">{{ __('Prix de la remise (optionnel)') }}</label>
            <div>
                <input type="text" name="discount_price" class="input-add" placeholder="Montant de la remise...">
                    @error('discount_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-success">Ajouter le plat</button></a>

    </form>

    </div>
</div>

@endsection