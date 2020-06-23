@extends('frontend.templates.default')

@section('content')

    <div class="container">
        <h4>Login</h4>
        <form action="{{ route('login') }}" class="col s12" method="post">
        @csrf
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" class="@error('email') invalid @enderror" value="{{ old('email') }}">
                    <label for="">Email</label>
                    @error('email')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="password" class="@error('password') invalid @enderror" value="">
                    <label for="">Password</label>
                    @error('password')
                        <span class="helper-text" data-error="{{ $message }}"></span>
                    @enderror
                </div>

                {{-- <div class="input field right">
                    <input type="submit" value="login" class="vawes-effect waves-light btn red accent-1">
                </div> --}}

                <div class="form-group row mb-0">
                    <div class="input field right">
                        @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <br><br>
                        <button type="submit" class="awes-effect waves-light btn red accent-1 right">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>              
        </form>
    </div>

@endsection