@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/audios.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div class="selected-audio">
        <div class="playing-audio">
            <audio src="{{ asset("Audios/aud_1.mp3") }}" controls></audio>
        </div>
        <div class="d-flex justify-content-between">
            <span id="reading-audio-title">Titre de l'audio</span>
            <h4 class="fas fa-times text-light"></h4>
        </div>
    </div>
    <div class="audio-space">
        <div id="exhibition-image">
            <div>Espace Audios</div>
            <div>Bienvenue sur l'espace audios du CJPR</div>
        </div>

        <div class="audio_filter d-flex justify-content-end mt-3">
            <label for="audio_filter" class="text-uppercase fw-bold"> Filtrer par année</label>
            <select name="audio_filter">
                <option value="2021">2021</option>
            </select>
        </div>

        <div class="audio-content">
            
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>
            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Croisade 2020-2021</div>
            </div>

            <div class="audio">
                <div class="miniature-audio">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="audio-title"> Cérémonie de Baptème </div>
            </div>

        </div>

        <div class="audio-pagination-container py-3"></div>
    </div>

    <script>
        $(function(){
            $(".selected-audio").hide();

            $(".miniature-audio").each(function(){
                $(this).click(function(){
                    $(".selected-audio").show();

                    $(".selected-audio h4").click(function(){
                        $(".selected-audio audio").trigger("pause");
                        $(".selected-audio").hide();
                    }); 
                });
            });

            // Pagination for audios in Médiathèque
            let audios = $(".audio");
            let audiosNumber = audios.length;;
            let audioperPage  = 8;

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