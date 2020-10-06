@extends('layouts.app')

@section('title', 'Modification d\'un plat')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection


@section('content')

<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Modification d\'un plat') }}</div>

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
            <input type="text" name="name" class="input-add" placeholder="Le nom de votre plat..." value="{{$menu->name}}">
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
                <input type="text" name="price" class="input-add" placeholder="Le prix de votre plat..." value="{{$menu->price}}">
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
                <textarea name="ingredient" cols="41" rows="10" placeholder="Vos ingrédients...">{{$menu->ingredient}}</textarea>
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
                    <option value="0" {{ $menu->is_discount == 0 ? 'selected' : '' }}>Non</option>
                    <option value="1" {{ $menu->is_discount == 1 ? 'selected' : '' }}>Oui</option>
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
                <input type="text" name="nb_unit" class="input-add" placeholder="Nombre de produits pour la remise..." value="{{$menu->nb_unit}}">
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
                <input type="text" name="discount_price" class="input-add" placeholder="Montant de la remise..." value="{{$menu->discount_price}}">
                    @error('discount_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-success">Modifier le plat</button></a>

    </form>

    </div>
</div>

@endsection
