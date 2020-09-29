@extends('layouts.app')

@section('title', 'Accueil')

<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@include('layouts.nav')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <div class="authenticateMessage">
                           <h1>
                                Bonjour {{ Auth::user()->name }}
                           </h1>
                           <p>
                                Bienvenue sur l'espace privé de <span class="welcomeTitle">Cuisine Dan Tan Lontan !</span>
                           </p>
                           <p>
                                Ici, tu pourras modifier ta présentation et tes informations de contact.
                                Tu pourras également ajouter, modifier ou supprimer n'importe quel élément de ton menu.
                           </p>
                           <p>
                                Je te souhaite une agréable visite, et bon appétit !
                           </p>
                        </div>
                    @endauth
                </div>
            @endif
                {{-- {{dd(Auth::user())}} --}}
        </div>
@endsection