@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/videos.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div class="selected-video">
        <div class="playing-video">
            {{-- <iframe src="https://www.youtube.com/embed/fxZ4H-gq_lc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
            <video id='reading-loader' src='{{ asset("Videos/vid.mp4") }}' controls></video>
        </div>
        <div>
            <span id="reading-video-title">Titre de la vidéo</span>
            <h4 class="fas fa-times text-light"></h4>
        </div>
    </div>
    
    <div class="video-space">
        <div id="exhibition-image">
            <div>Espace Vidéos</div>
            <div>Bienvenue sur l'espace vidéos du CJPR</div>
        </div>

        <div class="video_filter d-flex justify-content-end mt-3">
            <label for="video_filter" class="text-uppercase fw-bold"> Filtrer par année</label>
            <select name="video_filter">
                <option value="2021">2021</option>
            </select>
        </div>

        <div class="video-content">
            
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>
            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </div>

            <div class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </div>

        </div>

        <div class="video-pagination-container py-3"></div>
        
    </div>

    <script>
        $(function(){
            $(".selected-video").hide();

            $(".miniature-video").each(function(){
                $(this).click(function(){

                    $(".selected-video").show();

                    $(".selected-video h4").click(function(){
                        $(".selected-video video").trigger("pause");;
                        $(".selected-video").hide();
                    }); 
                });
            });

            // Pagination for videos in Médiathèque
            let videos = $(".video");
            let videosNumber = videos.length;;
            let videoperPage  = 8;

            videos.slice(videoperPage ).hide();

            $(".video-pagination-container").pagination({
                items : videosNumber,
                itemsOnPage : videoperPage ,
                prevText : "<<",
                nextText : ">>",
                onPageClick : function(pageNumber)
                {
                let showFrom = videoperPage  * (pageNumber - 1);
                let showTo = showFrom + videoperPage ;
                videos.hide().slice(showFrom, showTo).show();
                }
            });

        });
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection