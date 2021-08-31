@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/reset_password.css") }}">
@endsection

@section('content')
    <form action="#" method="#">
        <input type="password" name="reset_password" placeholder="Créer un nouveau de mot de passe" class="form-control">
        <input type="password" name="reset_password2" placeholder="Confirmer le nouveau mot de passe" class="form-control">
        <input type="submit" value="Réinitialiser le mot de passe" class="reset-password-button p-1 btn">
    </form>
@endsection