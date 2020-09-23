@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('content')
<div class="main-card">
    <div class="title-header">{{ __('Cuisine Dan Tan Lontan') }}</div>
    <div class="title-page">{{ __('Connexion') }}</div>

    <div class="body-card">
        <form method="POST" action="{{ route('login') }}">
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
                <label for="password" class="label-login">{{ __('Mot de Passe') }}</label>

                <div>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Se Souvenir de Moi') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn-login">
                        {{ __('Se Connecter') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Vous avez oublié votre mot de passe ?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
