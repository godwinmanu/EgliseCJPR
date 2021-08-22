@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/books.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    @include('pages.commandBookPopup')

    <div class="book-detail">
        <div class="book-image">
            <img src="{{ asset("images/card_2.png") }}" alt="Book's picture">
        </div>
        <div class="book-detail-infos">
            <div class="d-flex justify-content-between">
                <div class="book-title fw-bold fs-3">Titre du livre</div>
                <div class="book-price fs-3">$24.99</div>
            </div>
            <div class="author-name">
                <span class="fw-bold"> Author name</span>
                <button class="buy-book-button"> Passer la commande </button>
            </div>
            <div class="book-summary"> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sapiente consequuntur perferendis dolores temporibus magnam, voluptate ullam, dolor necessitatibus illo natus quod a non ipsa nostrum tempora consectetur eum odio sit nisi dolorum doloribus nesciunt. Fugiat adipisci, ea nemo quaerat excepturi consectetur vero, aspernatur, consequatur amet minima quisquam nesciunt ullam!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sapiente consequuntur perferendis dolores temporibus magnam, voluptate ullam, dolor necessitatibus illo natus quod a non ipsa nostrum tempora consectetur eum odio sit nisi dolorum doloribus nesciunt. Fugiat adipisci, ea nemo quaerat excepturi consectetur vero, aspernatur, consequatur amet minima quisquam nesciunt ullam!
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $(".buy-book-button").click(function(){
                $("#commandBookPopup").show();
            });

            $(".close-commandBookPopup").click(function(){
                $("#commandBookPopup").hide();
            });
        });
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection