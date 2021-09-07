@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/upload-audios.css") }}">
@endsection

@section('content')
    <div class="upload-content">
        <form action="#" method="#">
            <input type="text" name="audio-title" class="audio-title" placeholder="Titre de l'audio">
            <input type="text" name="audio-orator" class="audio-orator" placeholder="Orateur">
            <input type="text" name="audio-type" class="audio-type" placeholder="Catégorie de l'audio">
        </form>

        <div class="preview-images-box">
            <div class="show-selected-images">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <button class="audio-miniature">Miniature de l'audio</button>
        </div>

        <div id="validate-button">
            <button class="validate-upload"> Publier l'audio </button>
        </div>
    </div>
@endsection