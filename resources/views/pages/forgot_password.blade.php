@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/forgot_password.css") }}">
@endsection

@section('content')
    <form action="#" method="#">
        <p>
            Saisissez votre adresse mail ayant servi à l'ouverture du compte.
        </p>
        <input type="email" name="email_for_recorvering" placeholder="E-mail" class="form-control">
        <input type="submit" value="Envoyer" class="submit_email_for_recorvering p-1 btn">
    </form>

    <script>
        $(function(){
            $(".submit_email_for_recorvering").click(function(){
                let linkSetToUser = "Nous avons envoyé un mail contenant un lien de réinitilisation de mot de passe" +
                " à l'adresse que vous avez fournie. Veuillez consulter votre boîte de messagerie.";
                $("form").text(linkSetToUser);
            });
        });
    </script>
@endsection