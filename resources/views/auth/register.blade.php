@extends('layouts.master')
@section('title', 'Register')

@section('content')


    <div class="login-section">
        <div class="materialContainer">
            <div class="box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>

                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="block mt-1 w-full" name="name" autofocus="" />
                        @error('name')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="emailname">Email Address</label>
                        <input type="email" id="emailname" class="block mt-1 w-full" name="email" autofocus=""/>
                        @error('email')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" autofocus="" />
                        @error('password')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation" />
                        @error('password_confirmation')
                            <span class="text-danger mt-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="button login">
                        <button type="submit">
                            <span>Sign Up</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <p><a href="{{ route('login') }}" class="theme-color">Already have an account?</a></p>
        </div>
    </div>

@endsection
