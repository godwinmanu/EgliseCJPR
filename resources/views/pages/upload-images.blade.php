@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/upload-images.css") }}">
@endsection

@section('content')
    <div class="upload-boxes">
        <div>
            <div class="upload-album-image">
                <input type="text" name="album-title" class="audio-title" placeholder="Titre de l'album">
                <div class="preview-album-box">
                    <div class="show-selected-album-image">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <button class="album-miniature">Miniature de l'album</button>
                </div>
            </div>
    
            <div class="preview-images-box">
                <div class="show-selected-images">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <button class="images-to-add">Image(s) à ajouter à l'album</button>
            </div>
        </div> 
        
        <div id="validate-button">
            <button class="validate-upload">PUBLIER</button>
        </div>
    </div>
    
@endsection