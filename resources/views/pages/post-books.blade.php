@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/post-books.css") }}">
@endsection

@section('content')
    <div class="upload-content">
        <div class="upload-form">
            <form action="#" method="#">
                <input type="text" name="book-title" class="book-title" placeholder="Titre du livre">
                <input type="text" name="book-author" class="book-author" placeholder="Auteur du livre">
                <input type="number" name="book-price" class="book-price" placeholder="Prix du livre (en Francs CFA)" min="500">
                <select type="text" name="book-category" class="book-category">
                    <option disabled selected>Catégorie du livre</option>
                    <option value="Foi">Foi</option>
                    <option value="Leadership">Leadership</option>
                    <option value="couple">Couple</option>
                </select>
                <textarea class="book-synopsis" placeholder="Résumé du livre"></textarea>
            </form>
        </div>
        <div class="preview-box">
            <div class="preview-images-box">
                <div class="show-selected-images">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <input type="file" name="book-miniature-input" id="book-miniature-input" accept="image/jpeg, image/png">
                <label for="book-miniature-input" class="book-pic"> Charger une photo du livre </label>
            </div>
            <div id="validate-button">
                <button class="validate-upload"> Publier le livre </button>
            </div>
        </div>
    </div>

    <script>
        let selectedImage = document.getElementById("book-miniature-input");
        let previewImageBox = document.querySelector(".show-selected-images");

        selectedImage.addEventListener("change", displaySelectedBookMiniature);

        function displaySelectedBookMiniature(){
            previewImageBox.innerHTML = "";
            for (let i = 0; i < selectedImage.files.length; i++) {
                let bookMiniatureImage = document.createElement("img");
                bookMiniatureImage.src = window.URL.createObjectURL(selectedImage.files[i]);
                previewImageBox.appendChild(bookMiniatureImage);   
            }
        }

    </script>
@endsection