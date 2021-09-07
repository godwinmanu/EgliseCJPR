@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/register-admin.css") }}">
@endsection

@section('content')

    <form action="#" method="#">
        <input type="text" name="admin-name" class="admin-name" placeholder="Nom">
        <input type="text" name="admin-lastnames" class="admin-lastnames" placeholder="Prénoms">
        <input type="email" name="admin-email" class="admin-email" placeholder="Email">
        <input type="tel" name="admin-phone-number" class="admin-phone-number" placeholder="Numéro de téléphone">
        <select class="admin-role">
            <option disabled selected>Rôle</option>
            <option value="main">Principal(e)</option>
            <option value="writer">Rédacteur(trice)</option>
            <option value="treasurer">Trésorier(ère)</option>
        </select>
        <button class="add-admin-button"> Ajouter l'admin </button>

    </form>

@endsection