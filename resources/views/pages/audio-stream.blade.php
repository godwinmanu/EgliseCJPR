@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/audio-stream.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div id="exhibition-image">
        <div>Espace Audios</div>
    </div>

    <div class="streaming-space">
        <div class="audio-being-read">
            <img src="{{ asset('images/card_3.png') }}">
            <div class="audio-being-read-infos">
                <div>
                    <h2 class="fw-bold">Titre de l'audio</h2>
                    <div class="date-and-author-for-audio-being-read text-secondary fw-bold">
                        <span class="date"> 03 Août 2021 • </span>
                        <span class="author"> Ev Reynold TOKANOU </span>
                    </div>
                </div>
                <div class="share-and-download-icons">
                    <div class="share-icon">
                        <h3 class="fas fa-share-alt"></h3>
                        <p>Partager</p>
                    </div>
                    <a href="#" class="download-icon">
                        <h3 class="fas fa-download"></h3>
                        <p>Télécharger</p>
                    </a>
                </div>
            </div> 
        </div>

        <div class="other-audios pb-4">
            <p class="text-uppercase"> Autres audios de la même série </p>
            
            <div class="another-audio">
                <div>
                    <img src="{{ asset("images/card_1.png") }}" alt="MINIATURE">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="another-audio-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-audio text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>

            <div class="another-audio">
                <div>
                    <img src="{{ asset("images/card_2.png") }}" alt="MINIATURE">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="another-audio-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-audio text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>

            <div class="another-audio">
                <div>
                    <img src="{{ asset("images/card_4.png") }}" alt="MINIATURE">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="another-audio-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-audio text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        $(function(){
            $(".another-audio").each(function(){
                $(this).click(function(){
                    let selected_aud = '<audio src="{{ asset("Audios/aud_1.mp3") }}" controls></audio>'
                    $(".audio-being-read img").replaceWith(selected_aud);
                    $(".audio-being-read audio").css({
                        backgroundImage : 'url(../images/Bible_bg.jpeg)',
                        marginBottom : "30px",
                        borderRadius : "10px"
                    });
                });
            });

            $(".download-icon").click(function(){
                let source = $(this).parent().parent().siblings("audio").attr("src");
                $(this).prop("href",source);
                $(this).prop("target","_blank");
            });
            
        });
    </script>

@endsection


@section('footer')
  @include('layouts.partials.footer')
@endsection