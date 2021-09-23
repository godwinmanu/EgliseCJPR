@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/audios.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    <div class="audio-space">
        <div id="exhibition-image">
            <div>Espace Audios</div>
            <div>Bienvenue sur l'espace audios du CJPR</div>
        </div>

        <div class="audio_filter mt-4">
            <select name="Months">
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

            <select name="Years">
                <option selected disabled> Années </option>
                <option value="2019"> 2019 </option>
                <option value="2020"> 2020 </option>
                <option value="2021"> 2021 </option>
            </select>
        </div>

        <div class="audio-content">
            
            <a href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>
            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>
            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>
            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>
            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>
            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </a>

            <a  href="{{ url("audio-stream","id_audio") }}" class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </a>

        </div>

        <div class="audio-pagination-container py-3"></div>
    </div>

    <script>
        $(function(){
            // Pagination for audios in Médiathèque
            let userScreenWidth = screen.width;
            let audioperPage;


            if(userScreenWidth < 576){
                audioperPage = 10;

            }
            else if( userScreenWidth >= 576 && userScreenWidth < 768){
                audioperPage = 3;

            }
            else{
                audioperPage  = 8;
            }

            let audios = $(".audio");
            let audiosNumber = audios.length;;

            audios.slice(audioperPage ).hide();

            $(".audio-pagination-container").pagination({
                items : audiosNumber,
                itemsOnPage : audioperPage ,
                prevText : "<<",
                nextText : ">>",
                onPageClick : function(pageNumber)
                {
                let showFrom = audioperPage  * (pageNumber - 1);
                let showTo = showFrom + audioperPage ;
                audios.hide().slice(showFrom, showTo).show();
                }
            });

        });
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection