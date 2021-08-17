@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/video-stream.css") }}">
@endsection

@section('content')
    <div class="streaming-space p-3">
        <div class="video-being-read">
            <video src="{{ asset('Videos/vid.mp4') }}" controls></video>
            <span id="video-title">Titre de la vidéo</span>
        </div>
        <div class="other-videos">
            @for ($i = 0; $i < 20 ; $i++)
                <div>
                    <img src="{{ asset("images/card_3.png") }}" alt="MINIATURE">
                    <div class="other-video-infos">
                        <div> Titre de la vidéo </div>
                        <small> Auteur </small>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection