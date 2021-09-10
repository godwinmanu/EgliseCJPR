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
                <input type="text" name="video-path" class="video-path" disabled>
                <label for="video-file-input" class="choose-video-file"> PARCOURIR </label>    
                <input type="file" name="video-file-input" id="video-file-input" accept=".mp4">
            </div>
        </form>

        <div class="preview-images-box">
            <div class="show-selected-images">
                <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <input type="file" name="course-miniature-input" id="course-miniature-input" accept="image/jpeg, image/png">
            <label for="course-miniature-input" class="course-miniature"> Miniature de la vidéo du cours </label>
        </div>

        <div id="validate-button">
            <button class="validate-upload"> Publier le cours </button>
        </div>
    </div>

    <script>
        $(function(){
            $("#video-file-input").change(function(){
                let videoPath = document.querySelector("#video-file-input");
                $(".video-path").val(videoPath.files[0].name);
            });
            
            let selectedImage = document.getElementById("course-miniature-input");
            let previewImageBox = document.querySelector(".show-selected-images");

            selectedImage.addEventListener("change", displaySelectedVideoMiniature);

            function displaySelectedVideoMiniature(){
                previewImageBox.innerHTML = "";
                for (let i = 0; i < selectedImage.files.length; i++) {
                    let courseMiniatureImage = document.createElement("img");
                    courseMiniatureImage.src = window.URL.createObjectURL(selectedImage.files[i]);
                    previewImageBox.appendChild(courseMiniatureImage);   
                }
            }
        });
        

    </script>
@endsection