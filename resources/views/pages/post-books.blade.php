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
                <button class="book-pic">Charger une photo du livre</button>
            </div>
            <div id="validate-button">
                <button class="validate-upload"> Publier le livre </button>
            </div>
        </div>
    </div>
@endsection