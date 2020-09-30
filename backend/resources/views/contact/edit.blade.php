@extends('layouts.app')

@section('title', 'Modification du contact')

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

@section('content')

<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Modification du contact') }}</div>

    <div class="body-card">

<form class="formAdd" method="POST" action=" {{ route('contact.update') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
        <label for="phone" class="label-login"">Numéro de téléphone</label>
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>
            <input id="phone" type="tel" class="input-add" name="phone" value="{{ $contact->phone }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="mail" class="label-login"">E-mail</label>
        @error('mail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>
            <input id="mail" type="email" class="input-add" name="mail" value="{{ $contact->mail }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="facebook" class="label-login"">Facebook</label>
        @error('facebook')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>
            <input id="facebook" type="url" class="input-add" name="facebook" value="{{ $contact->facebook }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="instagram" class="label-login"">Instagram</label>
        @error('instagram')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>
            <input id="instagram" type="url" class="input-add" name="instagram" value="{{ $contact->instagram }}" required>
        </div>
    </div>
        <button type="submit" class="btn btn-success">
            Modifier le contact
        </button>
</form>

</div>
</div>



@endsection
