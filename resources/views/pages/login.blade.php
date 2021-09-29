@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
@endsection

@section('content')
    <div class="sign-space">
        <div class="signing-in">
            <a href="">
                <img src="{{ asset("images/logo_cjpr.png") }}" alt="LOGO CJPR">
            </a>
            <form action="{{ route('memberLogin') }}" method="POST" id="login-form" class="needs-validation" novalidate>
                @csrf
                <div>
                    <input type="email" name="email" id="email" placeholder="Adresse mail" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <div>
                    <input type="password" name="motDePasse" id="password" placeholder="Mot de passe" class="form-control @error('motDePasse') is-invalid @enderror" required value="{{ old('motDePasse') }}">
                    @error('motDePasse')
                        <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>
                <button type="submit" id="loginSubmitButton" class="text-light mt-2"> Se connecter </button>
            </form>
            <div class="connexion-links">
                <a href=" {{ route("forgot_password") }}" id="forgot-password">Mot de Passe oublié ?</a>
                <a href="{{ route("signup") }}" id="sign-up">S'inscrire</a>
            </div>
        </div>

    </div>
@endsection