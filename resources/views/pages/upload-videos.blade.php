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
                <input type="file" name="video-miniature-input" id="video-miniature-input" accept="image/jpeg, image/png">
                <label for="video-miniature-input" class="video-miniature"> Miniature de la vidéo </label>
            </div>
            <div id="validate-button">
                <button class="validate-upload"> Publier la vidéo </button>
            </div>
        </div>
    </div>

    <script>
        let selectedImage = document.getElementById("video-miniature-input");
        let previewImageBox = document.querySelector(".show-selected-images");

        selectedImage.addEventListener("change", displaySelectedVideoMiniature);

        function displaySelectedVideoMiniature(){
            previewImageBox.innerHTML = "";
            for (let i = 0; i < selectedImage.files.length; i++) {
                let videoMiniatureImage = document.createElement("img");
                videoMiniatureImage.src = window.URL.createObjectURL(selectedImage.files[i]);
                previewImageBox.appendChild(videoMiniatureImage);   
            }
        }

    </script>
@endsection