@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/images.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div class="selected-album">
        <div class="album-container">
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_1.png") }}" alt="IMAGE" id="image1">
            </div> 
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_2.png") }}" alt="IMAGE" id="image2">
            </div> 
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_3.png") }}" alt="IMAGE" id="image3">
            </div> 
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_4.png") }}" alt="IMAGE" id="image4">
            </div> 
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_1.png") }}" alt="IMAGE" id="image5">
            </div> 
            <div>
                <h4 class="fas fa-times close_displayed-image"></h4>
                <img src="{{ asset("images/card_2.png") }}" alt="IMAGE" id="image6">
            </div> 
        </div>
        <div class="d-flex justify-content-between selected_album_title_bar">
            <span id="reading-image-title">Titre de l'album</span>
            <h4 class="fas fa-times text-light close_selected_album"></h4>
        </div>
    </div>

    <div class="images-space">
        <div id="exhibition-image">
            <div>Espace Images</div>
            <div>Bienvenue sur l'espace images du CJPR</div>
        </div>

        <div class="album_filter d-flex justify-content-end mt-3">
            <label for="album_filter" class="text-uppercase fw-bold"> Filtrer par année</label>
            <select name="album_filter">
                <option value="2021">2021</option>
            </select>
        </div>

        <div class="images-content">
            
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>
            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_1.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Croisade 2020-2021</div>
            </div>

            <div class="album">
                <div class="last-image-of-album">
                    <img src="{{ asset("images/card_2.png") }}" alt="">
                    <div class="images-number text-light fs-3">50</div>
                </div>
                <div class="album-title"> Cérémonie de Baptème </div>
            </div>

        </div>
        <div class="display-selected-image-box">
            <h4 class="fas fa-times close_displayed-image"></h4>
            <h4 class="fas fa-angle-left display-previous-image"></h4>
            <h4 class="fas fa-angle-right display-next-image"></h4>
            
            <div></div>
        </div>
        <div class="album-pagination-container py-3"></div>
    </div>
    
    <script>
        $(function(){
            $(".selected-album").hide();
            $("#image-displayed").hide();
            $(".album-container h4").hide();
            $(".display-selected-image-box").hide();

            $(".last-image-of-album").each(function(){
                $(this).click(function(){
                    $(".selected-album").show();

                    $(".selected-album h4").click(function(){
                        $(".selected-album").hide();
                    }); 
                });
            });

            $(".album-container img").each(function(){
                var displayed_image = "";
                $(this).click(function(){
                    displayed_image = $(this);
                    let currentImageSource = displayed_image.prop("src");
                    let selectedImage = document.createElement("img");
                    selectedImage.src = currentImageSource;
                    selectedImage.alt = "IMAGE";
                    $(".display-selected-image-box div").html(selectedImage);
                    $(".display-selected-image-box").show();
                    
                    $(".display-selected-image-box .close_displayed-image").click(function(){
                        document.querySelector(".display-selected-image-box img").remove();
                        $(".display-selected-image-box").hide();
                    });

                        $(".display-selected-image-box .fa-angle-left").click(function(){
                            let previousImageSource = displayed_image.parent().prev().children("img").prop("src");
                            
                            if(previousImageSource){
                                let previousImage = document.createElement("img");
                                previousImage.src = previousImageSource;
                                previousImage.alt = "IMAGE";
                                $(".display-selected-image-box div").html(previousImage);
                                displayed_image = displayed_image.parent().prev().children("img");
                            }
   
                        });

                        $(".display-selected-image-box .fa-angle-right").click(function(){
                            let nextImageSource = displayed_image.parent().next().children("img").prop("src");
                            if(nextImageSource){
                                let nextImage = document.createElement("img");
                                nextImage.src = nextImageSource;
                                nextImage.alt = "IMAGE";
                                $(".display-selected-image-box div").html(nextImage);
                                displayed_image = displayed_image.parent().next().children("img");
                            }
                        });

                });

                
                
            });
            
            // Pagination for images in Médiathèque
            let albums = $(".album");
            let albumsNumber = albums.length;;
            let albumperPage  = 8;

            albums.slice(albumperPage ).hide();

            $(".album-pagination-container").pagination({
                items : albumsNumber,
                itemsOnPage : albumperPage ,
                prevText : "<<",
                nextText : ">>",
                onPageClick : function(pageNumber)
                {
                let showFrom = albumperPage  * (pageNumber - 1);
                let showTo = showFrom + albumperPage ;
                albums.hide().slice(showFrom, showTo).show();
                }
            });

        });
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection