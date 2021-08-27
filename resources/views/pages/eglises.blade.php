@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/eglises.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    <div class="church_details p-4">

        @switch($eglise)
            @case("TRN")
                <div class="pastoral_couple mb-3">
                    <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
                </div>
                <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Refuge des Nations
                </h4>
                <div class="pastoral-couple_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                    <div id="woman_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situé à .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                @break
            @case("TBI")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Bethsaleel Israël
                </h4>
                <div class="pastoral-couple_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                    <div id="woman_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situé à .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                @break
            @case("TPG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple Assani.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Porte de la Grâce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center">Pasteur Aboubacar ASSANI</h4>
                        <p class="px-3">
                            Marié à l’Evangéliste Blanche ASSANI et père de 04 enfants, le Pst ASSANI Aboubacar est titulaire d’un baccalauréat en comptabilité. Ancien cadre à la Direction Générale de Fanmilk Bénin, puis promoteur d'une entreprise de vente de produit laitier, celui-ci se consacre totalement au Seigneur suite à sa conversion. Après avoir reçu l'appel de Dieu sur sa vie et avoir transité par l'école missionnaire, celui-ci fut  consacré pasteur en 2018. Aujourd'hui, Pasteur des Eglises Jésus Pour Réussir, il est actuellement Pasteur et dirigeant de l’Antenne Porte de la Grâce de Bohicon.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Cinquième antenne, implantée, le Temple Porte de la Grâce est situé au quartier SACLO,  dans la rue en face de la station JNP ou de l'hôtel Tennessee, juste après le carrefour Dako en quittant Bohicon pour Cotonou et avant le carrefour Dako en quittant Cotonou.
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
                        </div>
                    </div>
                </div>
                @break
            @case("TAT")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Pst Agnès.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Arche du Triomphe
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situé à .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                </div>
                @break
            @case("TTG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple Assani.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Trône de Grâce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                            <div class="description-title pb-3">
                                <h5>Description</h5>
                                <div class="trait"></div> 
                            </div>
                            <p class="px-3">
                                Le Temple Refuge des Nations est situé à .............................
                            </p>
                    </div>
        
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                </div>
                @break
            @case("TPS")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Evangéliste Lionel.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Porte de Salut
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="man_pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situé à .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe>   
                        </div>
                    </div>
                </div>
                @break
            @case("TCG")
            <div class="pastoral_couple mb-3">
                <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
            </div>    
            <h4 class="mb-5 text-center text-uppercase fw-bold">
                    Temple Cité de Grâce
                </h4>
                <div class="pastor_speech pb-4">
                    <div id="pastor">
                        <h4 class="text-center">Pasteur GUIDIBI</h4>
                        <p class="px-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                        </p>
                    </div>
                </div>
            
                <div class="description-bloc">
                    <div class="description d-flex flex-column justify-content-center pb-2">
                        <div class="description-title pb-3">
                            <h5>Description</h5>
                            <div class="trait"></div> 
                        </div>
                        <p class="px-3">
                            Le Temple Refuge des Nations est situé à .............................
                        </p>
                    </div>
    
                    <div class="location d-flex flex-column justify-content-center pb-2">
                        <div class="location-title pb-3">
                            <h5>Localisation</h5>
                            <div class="trait"></div> 
                        </div>
                        
                        <div class="px-3 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7762719209163!2d2.3454642141110567!3d6.42278539535304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9c9eeebbfd7%3A0x61209cb81076764c!2sTemple%20Betsaleel%20Isra%C3%ABl%20-%20CJPR!5e0!3m2!1sfr!2sbj!4v1629918102447!5m2!1sfr!2sbj" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
                        </div>
                    </div>
                </div>
                @break

            @default
                {{ view("pages.welcome") }}
        @endswitch
        
    </div>
    
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection
