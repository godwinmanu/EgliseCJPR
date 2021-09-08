@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/donate.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div id="exhibition-image">
        <div> Je fais un don à l'Eglise CJPR</div>
    </div>

    <div>
        <div class="payment-space">
            <kkiapay-widget amount="1000" 
                            key="f0e123f0099011eca069c75559a38af2"
                            url="<url-vers-votre-logo>"
                            {{-- position="center" --}}
                            sandbox="true"
                            data=""
                            callback="<url-de-redirection-quand-lepaiement-est-reuissi>">
            </kkiapay-widget>
        </div>
        <div class="thanks-words">
            Merci beaucoup pour votre vision de soutenir la vision
            de l'Eglise CJPR.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias at cupiditate incidunt quasi iste architecto nulla odio veritatis nisi adipisci nostrum illo odit laboriosam ipsa dolor quidem placeat, nesciunt doloribus modi voluptates blanditiis repudiandae quis praesentium error. Autem molestias nostrum, facilis cumque reprehenderit magnam ab necessitatibus similique, officiis iste, omnis nihil inventore. Repellat dignissimos atque minus laboriosam aliquid ipsam iste, ullam explicabo tenetur ipsa doloribus aut est quis aspernatur iure quo voluptates, vero voluptatem sint. Vitae error obcaecati, magni, mollitia voluptatem saepe quas harum eaque sunt consequatur reprehenderit esse natus nam nesciunt iure ex! Vero eum ducimus voluptatem a perferendis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias at cupiditate incidunt quasi iste architecto nulla odio veritatis nisi adipisci nostrum illo odit laboriosam ipsa dolor quidem placeat, nesciunt doloribus modi voluptates blanditiis repudiandae quis praesentium error. Autem molestias nostrum, facilis cumque reprehenderit magnam ab necessitatibus similique, officiis iste, omnis nihil inventore. Repellat dignissimos atque minus laboriosam aliquid ipsam iste, ullam explicabo tenetur ipsa doloribus aut est quis aspernatur iure quo voluptates, vero voluptatem sint. Vitae error obcaecati, magni, mollitia voluptatem saepe quas harum eaque sunt consequatur reprehenderit esse natus nam nesciunt iure ex! Vero eum ducimus voluptatem a perferendis.
        </div>
    </div>
    <div class="other-payment-methods">
        <div class="text-center fs-3 fw-bold">Autres possibilités</div>
        <div class="payment-methods">
            <div class="fas fa-money-check"></div>
            <div class="fas fa-mobile"></div>
        </div>
    </div>

    <script src="https://cdn.kkiapay.me/k.js"></script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection