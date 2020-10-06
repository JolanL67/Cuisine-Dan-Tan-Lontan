@extends('layouts.app')

@section('title', 'Modification de la présentation')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection


@section('content')

<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Modification de la présentation') }}</div>

    <div class="body-card">

    <form class="formAdd" method="POST" action=" {{ route('presentation.update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="description" class="label-login">Description</label>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <textarea id="description" name="description" cols="50" rows="10" required>{{ $presentation->description }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="thumbnail" class="label-login">Image description</label>
            @error('thumbnail')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <img class="imgDescription" src="{{ $presentation->thumbnail }}" alt="image_description">
                <input id="thumbnail" type="file" class="input-add" name="thumbnail">
            </div>
        </div>
        <div class="form-group">
            <label for="bg_image" class="label-login">Image de fond</label>
            @error('bg_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <img class="imgPresentation" src="{{ $presentation->bg_image }}" alt="image de fond">
                <input id="bg_image" type="file" class="input-add" name="bg_image">
            </div>
        </div>
        <div class="form-group">
            <label for="command_info" class="label-login">Info de commande</label>
            @error('command_info')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <textarea id="command_info" name="command_info" rows="5" cols="50" required>{{ $presentation->command_info }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="payment_info" class="label-login">Info de paiement</label>
            @error('payment_info')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div>
                <textarea id="payment_info" name="payment_info" rows="5" cols="50" required>{{ $presentation->payment_info }}</textarea>
            </div>
        </div>
            <button type="submit" class="btn btn-success">
                Modifier la présentation
            </button>
    </form>

    </div>

</div>


@endsection
