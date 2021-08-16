@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/eglises.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    {{ $sigles = collect(["TRN","TBI", "TPG", "TAT","TTG", "TPS", "TCG"]) }}

    @if ($sigles->contains($eglise))
        <div id="pastoral_couple">
            <img src="{{ asset("images/Couple GUIDIBI.png") }}" alt="Couple Pastoral">
        </div>

        <div class="church_details p-4">

            @switch($eglise)
                @case("TRN")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Refuge des Nations
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TBI")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Bethsaleel Israël
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TPG")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Porte de la Grâce
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TAT")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Arche du Triomphe
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TTG")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Trône de Grâce
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TPS")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Porte de Salut
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break
                @case("TCG")
                    <h4 class="mb-5 text-center text-uppercase fw-bold">
                        Temple Cité de Grâce
                    </h4>
                    <div class="pastors_speech pb-4">
                        <div id="man_pastor">
                            <h4 class="text-center">Mr GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                        <div id="woman_pastor">
                            <h4 class="text-center">Mme GUIDIBI</h4>
                            <p class="px-3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. At iure veniam consequuntur! Delectus error voluptatibus suscipit aliquid minima sequi, in a voluptatem illo eius ducimus quidem architecto. Reprehenderit assumenda dolorem maxime fuga, doloribus quod. Expedita ut atque odio, illum tempore consectetur cupiditate ipsum nihil, magni laudantium aut sequi omnis sint enim cumque saepe velit et? Facilis voluptatibus placeat inventore aperiam ipsum! Accusantium sint excepturi dicta ad hic iusto in sequi tempore beatae tempora fugit voluptates dolorum, minus vel officia nostrum nulla unde laudantium. Iusto pariatur laudantium amet? Aut, tempora dolor aspernatur sunt sed aliquam, deleniti qui cumque, quaerat cupiditate esse.
                            </p>
                        </div>
                    </div>
                
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
                            
                        </div>
                    </div>
                    @break

                @default
                    {{ view("pages.welcome") }}
            @endswitch
            
        </div>
    @else
        {{ view("pages.welcome") }}
    @endif

    
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection