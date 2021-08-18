@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/books.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div class="book-detail">
        <img src="{{ asset("images/card_2.png") }}" alt="Book's picture">
        <p class="book-summary"> 
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex sapiente consequuntur perferendis dolores temporibus magnam, voluptate ullam, dolor necessitatibus illo natus quod a non ipsa nostrum tempora consectetur eum odio sit nisi dolorum doloribus nesciunt. Fugiat adipisci, ea nemo quaerat excepturi consectetur vero, aspernatur, consequatur amet minima quisquam nesciunt ullam!
        </p>
        <a href="#" class="buy-book-button text-center text-uppercase fw-bold">
            Passer La Commande
        </a>       
    </div>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection