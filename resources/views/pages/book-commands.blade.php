@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/book-commands.css") }}">
@endsection

@section('content')
    <div class="commands-container">
        @for ($i = 0; $i < 5; $i++)
            <div class="command">
                <div class="commanded-book">
                    <span class="fw-bold">LIVRE COMMANDÉ : </span> <strong>La présence de Dieu</strong> 
                    de <strong>Dr Mamadou Karambiri</strong>
                </div>
                <div class="commanded-by">
                    <span class="fw-bold">COMMANDÉ PAR : </span> Jonas JOHN
                </div>
                <div class="client-contact">
                    <span class="fw-bold">CONTACT DU CLIENT : </span> +22997979797
                </div>
                <div class="commanded-quantity">
                    <span class="fw-bold">QUANTITÉ : </span> 05
                </div>
                <div class="client-location">
                    <span class="fw-bold">LIEU DE LIVRAISON : </span> Godomey
                </div>
                <div class="ohter-details">
                    <span class="fw-bold">DÉTAILS COMPLÉMENTAIRES : </span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam voluptates maxime amet temporibus atque placeat, animi architecto voluptatibus ut molestiae?
                </div>
            </div>
        @endfor
    </div>
@endsection
