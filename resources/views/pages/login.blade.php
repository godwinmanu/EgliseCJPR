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
            <form action="#" method="" id="login-form">
                <input type="email" name="email" id="email" placeholder="Adresse mail">
                <input type="password" name="pass" id="password" placeholder="Mot de passe">
                <button type="submit" id="loginSubmitButton" class="text-light mt-2"> Se connecter </button>
            </form>
            <div class="connexion-links">
                <a href=" {{ route("forgot_password") }}" id="forgot-password">Mot de Passe oublié ?</a>
                <a href="#" id="sign-up">S'inscrire</a>
            </div>
        </div>

    </div>

    <script>
        $(function(){
            $("#sign-up").click(function(){
                $(".signing-in").fadeOut(1000);
                $("body").load("{{ route('signup') }}", function(){
                    $(this).fadeIn(1000);
                });
            });
        });
    </script>
@endsection