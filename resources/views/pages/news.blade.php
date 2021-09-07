@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/news.css") }}">
@endsection

@section('content')

    <form action="#" method="POST">
        <textarea name="news" id="news" placeholder="Editer l'annonce ici..."></textarea>
        <button type="submit">Publier l'annonce</button>
    </form>

@endsection