@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/upload-videos.css") }}">
@endsection

@section('content')
    <div class="upload-content">
        <div class="upload-form">
            <form action="#" method="#">
                <input type="text" name="video-title" class="video-title" placeholder="Titre de la vidéo">
                <input type="text" name="video-iframe" class="video-iframe" placeholder="Iframe de la vidéo">
                <input type="text" name="video-orator" class="video-orator" placeholder="Orateur">
                <input type="text" name="video-type" class="video-type" placeholder="Catégorie de la vidéo">
                <textarea class="video-synopsis" placeholder="Résumé de la vidéo"></textarea>
            </form>
        </div>
        <div class="preview-box">
            <div class="preview-images-box">
                <div class="show-selected-images">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <button class="video-miniature">Miniature de la vidéo</button>
            </div>
            <div id="validate-button">
                <button class="validate-upload"> Publier la vidéo </button>
            </div>
        </div>
    </div>
@endsection