@extends('layouts.auth')

@section('content')
    <div class="container mx-auto h-screen h-full flex justify-center items-center">
        <div class="w-full max-w-xs">
            <img class="p-5 h-48 m-auto" src="{{ asset('images/TennisLogoWhite.png') }}" alt="Club Tennis Santpedor">
            <form class="bg-one-light rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2" for="email">
                        Correu electrònic
                    </label>
                    <input class="bg-one text-sm placeholder-one-lighter appearance-none rounded w-full py-3 px-3 focus:outline-none" id="username" type="text" placeholder="Correu electrònic">
                </div>
                <div class="mb-6">
                    <label class="block mb-2" for="password">
                        Contrasenya
                    </label>
                    <input class="bg-one text-sm placeholder-one-lighter appearance-none rounded w-full py-3 px-3 focus:outline-none" id="password" type="password" placeholder="Contrasenya">
                </div>
                <div class="row">
                    <a class="block align-baseline text-xs text-alert hover:opacity-75 mb-2" href="#">
                        Has oblidat la contrasenya?
                    </a>
                    <button class="w-full block bg-two hover:opacity-75 font-bold py-2 px-4 rounded focus:outline-none content-center" type="button">
                        Entra
                    </button>
                </div>
            </form>
            <p class="text-center text-two text-xs">
                &copy;2020 Club Tennis Santpedor. All rights reserved.
            </p>
        </div>
    </div>

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
