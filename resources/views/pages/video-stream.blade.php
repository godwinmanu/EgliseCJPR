@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/video-stream.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div id="exhibition-image">
        <div>Espace Vidéos</div>
    </div>

    <div class="streaming-space">
        
        <div class="video-being-read">
            <img src="{{ asset('images/card_3.png') }}">
            <div class="video-being-read-infos">
                <div>
                    <h2 class="fw-bold">Titre de la vidéo</h2>
                    <div class="date-and-author-for-video-being-read text-secondary fw-bold">
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

        <div class="video-summary">
            <div class="summary-dropdown-icon d-flex justify-content-between align-items-center">
                <span class="text-uppercase"> Résumé de la vidéo </span>
                <span id="chevron" class="fas fa-chevron-down"></span>
            </div>
            <div class="summary-text p-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aperiam ipsa libero perspiciatis et eos ab quia mollitia, suscipit tenetur debitis, sunt, labore nostrum cupiditate modi? Suscipit incidunt minus adipisci.
            </div>
        </div>

        <div class="other-videos pb-4">
            <p class="text-uppercase"> Autres vidéos de la même série </p>
            
            <div class="another-video">
                <div>
                    <img src="{{ asset("images/card_1.png") }}" alt="MINIATURE">
                    <i class="fas fa-play"></i>
                </div>
                <div class="another-video-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-video text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>

            <div class="another-video">
                <div>
                    <img src="{{ asset("images/card_2.png") }}" alt="MINIATURE">
                    <i class="fas fa-play"></i>
                </div>
                <div class="another-video-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-video text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>

            <div class="another-video">
                <div>
                    <img src="{{ asset("images/card_4.png") }}" alt="MINIATURE">
                    <i class="fas fa-play"></i>
                </div>
                <div class="another-video-infos">
                    <div class="fs-4 fw-bold">
                        Lire et méditer la parole pour grandir en Christ
                    </div>
                    <div class="date-and-author-for-another-video text-secondary">
                        <span class="date"> 24 Mars 2021 • </span>
                        <span class="author"> Pasteur Hermione GUIDIBI </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script>
        $(function(){
            $(".summary-text").slideUp(100);
            $(".another-video").each(function(){
                $(this).click(function(){
                    let selected_vid = '<video src="{{ asset("Videos/vid.mp4") }}" controls></video>'
                    $(".video-being-read img").replaceWith(selected_vid);
                });
            });

            $(".download-icon").click(function(){
                let source = $(this).parent().parent().siblings("video").attr("src");
                $(this).prop("href",source);
                $(this).prop("target","_blank");
            });
            
            $(".summary-dropdown-icon").click(function(){
                $(".summary-text").slideToggle(500, function(){
                    if($(".summary-dropdown-icon").siblings(".summary-text").is(":hidden")){
                        $("#chevron").prop("class","fas fa-chevron-down");
                    }
                    else{
                        $("#chevron").prop("class","fas fa-chevron-up");
                    }
                });
                
            });
        });
    </script>

@endsection


@section('footer')
  @include('layouts.partials.footer')
@endsection