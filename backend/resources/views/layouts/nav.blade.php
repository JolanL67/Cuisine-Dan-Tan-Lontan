@if (!Route::is('login'))
    <nav class="navbar-notboostrap">
        <div class="homeLink">
        <a class="navbar-title" href="{{ route('home') }}">CDTL</a>
        </div>
        <div class="featureLink">
            <a class="navbar-title @if(Route::is('menu.*') || Route::is('menu'))active @endif" href="{{ route('menu') }}">Menu</a>
            <a class="navbar-title @if(Route::is('presentation.*') || Route::is('presentation'))active @endif" href="{{ route('presentation.show') }}">Présentation</a>
            <a class="navbar-title @if(Route::is('contact.*') || Route::is('contact'))active @endif" href="{{ route('contact.show') }}">Contact</a>
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
@endif
