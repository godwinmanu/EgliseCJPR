@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/register-admin.css") }}">
@endsection

@section('content')

    <form action="{{ route('registerAdmin') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="input">
            <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value='{{ old('nom') }}' placeholder="Nom">
            @error('nom')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="input">
            <input type="text" name="prenoms" class="form-control @error('prenoms') is-invalid @enderror" value='{{ old('prenoms') }}' placeholder="Prénoms">
            @error('prenoms')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="input">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value='{{ old('email') }}' placeholder="Email">
            @error('email')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="input">
            <input type="tel" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value='{{ old('telephone') }}' placeholder="Numéro de téléphone">
            @error('telephone')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="input">
            <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value='{{ old('ville') }}' placeholder="Ville de résidence">
            @error('ville')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <div class="input">
            <select name="role" class="form-select @error('role') is-invalid @enderror" value='{{ old('role') }}'>
                <option disabled selected>Rôle</option>
                <option value="main">Principal(e)</option>
                <option value="writer">Rédacteur(trice)</option>
                <option value="treasurer">Trésorier(ère)</option>
            </select>
            @error('role')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
        <button class="add-admin-button"> Ajouter l'admin </button>

    </form>

@endsection