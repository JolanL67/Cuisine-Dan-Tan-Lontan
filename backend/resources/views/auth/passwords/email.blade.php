@extends('layouts.app')

@section('title', 'Réinitialisation du mot de passe')

<link rel="stylesheet" href="{{ asset('css/forms.css') }}">

@section('content')
<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Réinitialisation du mot de passe') }}</div>

    @if (session('status'))
        <div class="alert alert-success alert-block success-auth" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
    @endif

    <div class="body-card">

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="label-login">{{ __('Adresse E-mail') }}</label>

                <div>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn-reset-password">
                        {{ __('Envoyer le lien de réinitialisation du mot de passe') }}
                    </button>
                </div>
                <div>
                <a href="{{ route ('login') }}">
                        <button type="button" class="btn-login">
                            {{ __('Se connecter') }}
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
