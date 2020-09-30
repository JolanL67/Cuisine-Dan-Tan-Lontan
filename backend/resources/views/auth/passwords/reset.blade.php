@extends('layouts.app')

@section('title', 'Réinitialisation du mot de passe')

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

@section('content')

<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Réinitialisation du mot de passe') }}</div>

    <div class="body-card">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="email" class="label-login">{{ __('Adresse E-mail') }}</label>

                <div>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}"  required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="label-login">{{ __('Mot de passe') }}</label>

                <div>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="label-login">{{ __('Confirmez le mot de passe') }}</label>

                <div>
                    <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror "name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn-login">
                        {{ __('Réinitialisez le mot de passe') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
