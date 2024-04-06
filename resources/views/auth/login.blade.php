@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <!-- Log In Section Start -->
    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>

                    <div class="input">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Email" autofocus= ""  autocomplete="name">
                        @error('email')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input my-3">
                        <input id="pass" type="password" class="form-control" name="password" placeholder="Password"
                            autofocus= ""  autocomplete="password">

                        @error('password')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <a href="javascript:void(0)" class="pass-forgot">Forgot your password?</a> --}}

                    {{-- <div class="button login">
                        <button type="submit">
                            <span>Log In</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div> --}}

                    <div class="row mb-0 ">
                        <div class="button login">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="pass-forgot" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>

                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    <p>Not a member? <a href="{{ route('register') }}" class="theme-color">Sign up now</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- Log In Section End -->
@endsection
