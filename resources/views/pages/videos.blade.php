@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/videos.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    
    <div class="video-space">
        <div id="exhibition-image">
            <div>Espace Vidéos</div>
            <div>Bienvenue sur l'espace vidéos du CJPR</div>
        </div>

        <div class="video_filter d-flex justify-content-end mt-3">
            <select name="Months" class="form-select">
                <option selected disabled> Mois </option>
                <option value="Jan"> Janvier </option>
                <option value="Feb"> Février </option>
                <option value="Mar"> Mars </option>
                <option value="Apr"> Avril </option>
                <option value="May"> Mai </option>
                <option value="June"> Juin </option>
                <option value="July"> Juillet </option>
                <option value="Aug"> Août </option>
                <option value="Sep"> Septembre </option>
                <option value="Oct"> Octobre </option>
                <option value="Nov"> Novembre </option>
                <option value="Dec"> Décembre </option>
            </select>

            <select name="Years" class="form-select">
                <option selected disabled> Années </option>
                <option value="2019"> 2019 </option>
                <option value="2020"> 2020 </option>
                <option value="2021"> 2021 </option>
            </select>
        </div>

        <div class="video-content">
            
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>
            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Croisade 2020-2021</div>
            </a>

            <a href="{{ url("video-stream","id_video") }}" class="video">
                <div class="miniature-video">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-title"> Cérémonie de Baptème </div>
            </a>

        </div>

        <div class="video-pagination-container py-3"></div>
        
    </div>

    <script>
        $(function(){
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