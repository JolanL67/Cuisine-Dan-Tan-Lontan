@extends('layouts.app')

@section('title', 'Ajout d\'un plat')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection


@section('content')

<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Ajout d\'un plat') }}</div>

    <div class="body-card">

    <form action="{{ route('menu.add.post') }}" method="post" class="formAdd">
        @csrf
        <div class="form-group">
            <label for="type" class="label-login">{{ __('Type de plat') }}</label>
            <div>
                <select name="type" class="input-add">
                    <option value="" selected disabled>Choisissez votre type de plat</option>
                    <option @if( old('type')  == "Plats chaud") selected @endif value="Plats chaud">Plats chaud</option>
                    <option @if( old('type')  == "Accompagnements") selected @endif value="Accompagnements">Accompagnements</option>
                    <option @if( old('type')  == "Apéritif Créole") selected @endif value="Apéritif Créole">Apéritif Créole</option>
                    <option @if( old('type')  == "Gâteaux fait Maison") selected @endif value="Gâteaux fait Maison">Gâteaux fait Maison</option>
                    <option @if( old('type')  == "Boucherie") selected @endif value="Boucherie">Boucherie</option>
                    <option @if( old('type')  == "Nos sandwichs réunionnais") selected @endif value="Nos sandwichs réunionnais">Nos sandwichs réunionnais</option>
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
                <input type="text" id="name" name="name" class="input-add" placeholder="Le nom de votre plat..." value="{{ old('name') }}">
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
                <input type="text" name="price" class="input-add" placeholder="Le prix de votre plat..." value="{{ old('price') }}">
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
                <textarea name="ingredient" cols="41" rows="10" placeholder="Vos ingrédients...">{{ old('ingredient') }}</textarea>
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
                <select id="discount" name="is_discount" class="input-add">
                    <option value="0" @if( old('is_discount')  == "0") selected @endif>Non</option>
                    <option value="1" @if( old('is_discount')  == "1") selected @endif>Oui</option>
                </select>
                    @error('is_discount')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <div id="unit" class="form-group">
            <label for="nb_unit" class="label-login">{{ __('Nombre remisé') }}</label>
            <div>
                <input type="text" name="nb_unit" class="input-add" placeholder="Nombre de produits pour la remise..." value="{{ old('nb_unit') }}">
                    @error('nb_unit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <div id="discountPrice" class="form-group">
            <label for="discount_price" class="label-login">{{ __('Prix de la remise') }}</label>
            <div>
                <input type="text" name="discount_price" class="input-add" placeholder="Montant de la remise..." value="{{ old('discount_price') }}">
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
