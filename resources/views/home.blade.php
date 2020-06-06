<!DOCTYPE html>
<html lang="en">
 @include('frontend.templates.partials.head')
<body>

{{-- navigation --}}
<nav>
    <div class="nav-wrapper">
        <a href="{{ route('homepage') }}" class="brand-logo">Perpusku</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('homepage') }}">Perpus</a></li>
            <li>
                <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>    
            </li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('homepage') }}">Perpus</a></li>
    <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </li>
</ul>



{{-- Content --}}
<div class="container">

<div class="container">
    <h5>Welcome {{ Auth::user()->name }}</h5>
    <h6>Let's go to read!</h6><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <a href="{{ route('homepage') }}">>> <u>Go to book store</u></a>
            </div>
        </div>
    </div>
</div>

</div>

@include('frontend.templates.partials.scripts')
</body>
</html>


    



