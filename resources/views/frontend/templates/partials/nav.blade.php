<nav>
    <div class="nav-wrapper">
        <a href="{{ route('homepage') }}" class="brand-logo">Perpusku</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        
        <ul class="right hide-on-med-and-down">
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
        </ul>

    </div>
</nav>


<ul class="sidenav" id="mobile-demo">
    @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a href="{{ route('login') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endguest
</ul>


{{-- <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
</ul> --}}