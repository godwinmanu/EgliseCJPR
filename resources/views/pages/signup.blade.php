@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/signup.css") }}">
@endsection

@section('content')
    <div class="signing-up">
        <h3 class="text-center">Inscription</h3>
        <form action="{{ route('register-member') }}" method="POST" id="sign-up-form" class="needs-validation" novalidate>
            @csrf
            <div class="input">
                <input type="text" name="nom" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" required value="{{ old('nom') }}">
                @error('nom')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="text" name="prenoms" placeholder="Prénoms" class="form-control @error('prenoms') is-invalid @enderror" required value="{{ old('prenoms') }}">
                @error('prenoms')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="email" name="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="tel" name="telephone" id="phone-number" placeholder="Contact téléphonique" class="form-control @error('telephone') is-invalid @enderror" required value="{{ old('telephone') }}">
                @error('telephone')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="text" name="ville" id="city" placeholder="Ville de résidence" class="form-control @error('ville') is-invalid @enderror" required value="{{ old('ville') }}">
                @error('ville')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="password" name="motDePasse" id="password" placeholder="Mot de passe" class="form-control @error('motDePasse') is-invalid @enderror" required value="{{ old('motDePasse') }}">
                @error('motDePasse')
                    <div class="invalid-feedback"> {{ $message }} </div>
                @enderror
            </div>

            <div class="input">
                <input type="password" name="motDePasse_confirmation" id="password" placeholder="Confirmer le mot de passe" class="form-control @error('motDePasse') is-invalid @enderror" required value="{{ old('motDePasse_confirmation') }}">
            </div>

            <button type="submit" id="sign-up-submit-button" class="text-light mt-2"> S'inscrire </button>
        </form>
    </div>
@endsection