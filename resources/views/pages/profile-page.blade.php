@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/profile-page.css") }}">
@endsection

@section('content')
    <div class="profile-page">

        <input type="text" disabled name="surname" id="surname">
        
        <input type="text" disabled name="lastnames" id="lastnames">

        <div class="input-div">
            <input type="email" disabled name="email" id="email">
            <label for="email" class="fas fa-pen text-info"></label>
        </div>

        <div class="input-div">
            <input type="tel" disabled name="phone-number" id="phone-number">
            <label for="phone-number" class="fas fa-pen text-info"></label>
        </div>

        <div class="input-div">
            <input type="text" disabled name="city" id="city">
            <label for="city" class="fas fa-pen text-info"></label>
        </div>

        <div class="input-div">
            <input type="password" disabled name="current-password" id="current-password">
            <label for="current-password" class="fas fa-pen text-info"></label>
        </div>
        <button class="btn btn-info text-light fw-bold">Enrégistrer</button>
  
    </div>

    <script>
        $(function(){
            $("#surname").val("JOHN");
            $("#lastnames").val("Jonas");
            $("#email").val("johnjonas@gmail.com");
            $("#phone-number").val("+229 97979797");
            $("#city").val("Lomé");
            $("#current-password").val("passwordpassword2021");

            $("label").each(function(){
                $(this).click(function(){
                    $(this).siblings("input").prop("disabled", false);
                });
            });
        });
    </script>
@endsection