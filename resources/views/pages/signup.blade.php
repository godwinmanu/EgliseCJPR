@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/signup.css") }}">
@endsection

@section('content')
    <div class="signing-up">
        <h3 class="text-center">Inscription</h3>
        <form action="#" method="" id="sign-up-form">
            <input type="text" name="name" id="email" placeholder="Nom">
            <input type="text" name="forename" id="email" placeholder="Prénoms">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="tel" name="phoneNumber" id="phone-number" placeholder="Contact téléphonique">
            <input type="text" name="city" id="city" placeholder="Ville de résidence">
            <input type="password" name="pass1" id="password" placeholder="Mot de passe">
            <input type="password" name="pass2" id="password" placeholder="Confirmer le mot de passe">
            <button type="submit" id="sign-up-submit-button" class="text-light mt-2"> S'inscrire </button>
        </form>
    </div>
@endsection