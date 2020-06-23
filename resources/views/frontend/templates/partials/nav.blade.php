<nav class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('homepage') }}" class="brand-logo">Perpusku</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                
                <ul id="dropdown1" class="dropdown-content">

                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">Profile</a></li>
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>

                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <li><a href="#" class="dropdown-trigger" data-target="dropdown1">{{ auth()->user()->name }}</a></li>
            @endguest
            </ul>
        </div>
    </nav>
</nav>

<ul class="sidenav" id="mobile-demo">
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else

    <li><a href="{{ route('homepage') }}">Home</a></li>
    <li><a href="{{ route('home') }}">{{ Auth::user()->name }}</a></li>
    <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>         

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    @endguest
</ul>


{{-- <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
</ul> --}}