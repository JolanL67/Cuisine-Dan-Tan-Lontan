<link rel="stylesheet" href="{{ asset('css/nav.css') }}">

<nav class="navbar-notboostrap">
    <div class="homeLink">
    <a class="navbar-title" href="{{ route('home') }}">CDTL</a>
    </div>
    <div class="featureLink">
    <a class="navbar-title" href="{{ route('menu') }}">Menu</a>
        <a class="navbar-title" href="#">Présentation</a>
        <a class="navbar-title" href="#">Contact</a>
        @auth
            <a class="navbar-title" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Se déconnecter') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @endauth
    </div>
</nav>