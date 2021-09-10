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
            <input type="file" name="audio-miniature-input" id="audio-miniature-input" accept="image/jpeg, image/png">
            <label for="audio-miniature-input" class="audio-miniature">Miniature de l'audio</label>
        </div>

        <div id="validate-button">
            <button class="validate-upload"> Publier l'audio </button>
        </div>
    </div>

    <script>
        let selectedImage = document.getElementById("audio-miniature-input");
        let previewImageBox = document.querySelector(".show-selected-images");
        let previewImageBoxHeight = "";

        selectedImage.addEventListener("change", displaySelectedImage);
    
        function displaySelectedImage(){
            previewImageBoxHeight = previewImageBox.offsetHeight+"px";
            previewImageBox.style.height = previewImageBoxHeight;

            previewImageBox.innerHTML = "";
            for (let i = 0; i < selectedImage.files.length; i++) {
                let albumImage = document.createElement("img");
                albumImage.src = window.URL.createObjectURL(selectedImage.files[i]);
                previewImageBox.appendChild(albumImage);   
            }
        }
    
    </script>
@endsection