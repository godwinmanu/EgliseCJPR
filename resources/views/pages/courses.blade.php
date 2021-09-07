@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/courses.css") }}">
@endsection

@section('content')
    <div class="upload-content">
        <form action="#" method="#">
            <input type="text" name="course-title" class="course-title" placeholder="Nom du cours (matière)">
            <input type="text" name="chapter-title" class="chapter-title" placeholder="Titre du chapitre (lesson)">
            <div class="input-group">
                <input type="text" name="video-path" class="video-path" placeholder="Chemin de la vidéo" disabled>
                <button>PARCOURIR</button>
            </div>
        </form>

        <div class="preview-images-box">
            <div class="show-selected-images">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <button class="course-miniature">Miniature de la vidéo du cours</button>
        </div>

        <div id="validate-button">
            <button class="validate-upload"> Publier le cours </button>
        </div>
    </div>
@endsection