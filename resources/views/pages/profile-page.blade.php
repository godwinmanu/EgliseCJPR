@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/profile-page.css") }}">
@endsection

@section('content')
    <div class="profile-page">
        <div>
            <input type="text" name="surname" id="surname">
            
            <input type="text" name="lastnames" id="lastnames">

            <div class="input-div">
                <input type="email" name="email" id="email">
                <label for="email" class="fas fa-pen text-info"></label>
            </div>
        </div>
        <div>
            <div class="input-div">
                <input type="tel" name="phone-number" id="phone-number">
                <label for="phone-number" class="fas fa-pen text-info"></label>
            </div>

            <div class="input-div">
                <input type="text" name="city" id="city">
                <label for="city" class="fas fa-pen text-info"></label>
            </div>

            <div class="input-div">
                <input type="password" name="current-password" id="current-password">
                <label for="current-password" class="fas fa-pen text-info"></label>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $("#surname").val("JOHN");
            $("#lastnames").val("Jonas");
            $("#email").val("johnjonas@gmail.com");
            $("#phone-number").val("+229 97979797");
            $("#city").val("Lomé");
            $("#current-password").val("passwordpassword2021");
        });
    </script>
@endsection