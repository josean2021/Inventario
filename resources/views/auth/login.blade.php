@extends('layouts.app')
@php
/* ------------------ Plantilla de Login ----------------------*/
@endphp

@yield('conten_login')
<div class="login-wrap cover">
    <div class="container-login">
        <img class="logo_ndp" src="/img/logo.png">
        <p class="login-text">
            Inicie sesión con su cuenta
        </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <legend class="uk-legend"> Usuario </legend>
                <div class="uk-inline">
                    <span class="uk-form-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                </div>
                <legend class="uk-legend"> Contraseña </legend>
                <div class="uk-inline">
                    <span class="uk-form-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="uk-inline">
                        <label class="form-check-label" for="remember" style="color: white; text-align: center">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="uk-margin">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="uk-inline">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvide la contraseña?') }}
                        </a>
                    @endif
                </div>
             </form>
        </div>
    </div>
