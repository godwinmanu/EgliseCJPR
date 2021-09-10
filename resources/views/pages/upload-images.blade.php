@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/upload-images.css") }}">
@endsection

@section('content')
    <div class="upload-boxes">
        <div id="album-box">
            <div class="upload-album-image">
                <input type="text" name="album-title" class="audio-title" placeholder="Titre de l'album">
                <div class="preview-album-box">
                    <div class="show-selected-album-image">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <input type="file" name="album-miniature-input" id="album-miniature-input" accept="image/jpeg, image/png">
                    <label for="album-miniature-input" class="album-miniature">Miniature de l'album</label>
                </div>
            </div>
    
            <div class="preview-images-box">
                <div class="show-selected-images">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <input type="file" name="images-to-add-input" id="images-to-add-input" multiple accept="image/jpeg, image/png">
                <label for="images-to-add-input" class="images-to-add">Image(s) à ajouter à l'album</label>
            </div>
        </div> 
        
        <div id="validate-button">
            <button class="validate-upload">PUBLIER</button>
        </div>
    </div>

    <script>
        let selectedAlbum = document.getElementById("album-miniature-input");
        let previewAlbumBox = document.querySelector(".show-selected-album-image");
        let selectedImages = document.getElementById("images-to-add-input");
        let previewImagesBox = document.querySelector(".show-selected-images");
        let previewImagesBoxHeight = "";

        selectedImages.addEventListener("change", displaySelectedImages);
        selectedAlbum.addEventListener("change", displaySelectedAlbumImage);

        function displaySelectedImages(){
            previewImagesBoxHeight = previewImagesBox.offsetHeight+"px";
            previewImagesBox.style.height = previewImagesBoxHeight;

            if(selectedImages.files.length > 0){
                previewImagesBox.innerHTML = "";
                for (let i = 0; i < selectedImages.files.length; i++) {
                    let iterationImage = document.createElement("img");
                    iterationImage.src = window.URL.createObjectURL(selectedImages.files[i]);
                    previewImagesBox.appendChild(iterationImage);   
                }
            }
        }
    
        function displaySelectedAlbumImage(){
            previewAlbumBox.innerHTML = "";
            for (let i = 0; i < selectedAlbum.files.length; i++) {
                let albumImage = document.createElement("img");
                albumImage.src = window.URL.createObjectURL(selectedAlbum.files[i]);
                previewAlbumBox.appendChild(albumImage);   
            }
        }
    
    </script>
    
@endsection