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
            <input type="number" name="donation-amount" id="donation-amount" min="100" placeholder="Entrez la somme à donner">
            <input type="email" name="donation-email" id="donation-email" placeholder="Saisissez votre adresse email">
            
            <div>Veuillez cochez le type de don</div>

            <div>
                <input type="radio" name="donation-type" id="dime">
                <label for="dime">Dîme</label>
            </div>
            

            <div>
                <input type="radio" name="donation-type" id="offrande">
                <label for="offrande">Offrande</label>
            </div>
            

            <div>
                <input type="radio" name="donation-type" id="evangelisation">
                <label for="evangelisation">Evangélisation</label>
            </div>
            
            <select name="donator-country" id="donator-country">
                <option disabled selected>Pays</option>
                <option value="Angola">Angola</option>
                <option value="Bénin">Bénin</option>
                <option value="Burkina-Fasso">Burkina-Fasso</option>
            </select>

            <input type="text" name="donator-city" id="donator-city" placeholder="Indiquez le nom de votre ville">

            <select name="donator-church" id="donator-church">
                <option disabled selected>Mon Eglise</option>
                <option value="online-church">Eglise en ligne</option>
                <option value="TRN">TRN</option>
                <option value="TBI">TBI</option>
                <option value="TPS">TPS</option>
            </select>


            {{-- <select name="donator-type" id="donator-type">
                <option disabled selected>Type de don</option>
                <option value="dime">Dîme</option>
                <option value="offrande">Offrande</option>
                <option value="evangelisation">Evangélisation</option>
            </select> --}}
            <button class="kkiapay-button"> Proccéder au paiement</button>


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
            <img src="{{ asset("images/virement.png") }}" alt="VIREMENT" width="250" height="100">
            <img src="{{ asset("images/western.png") }}" alt="VIREMENT" width="250" height="100">
        </div>
    </div>

    <script amount="1000" 
        callback="<url-de-redirection-quand-lepaiement-est-reuissi>"
        data=""
        url="<url-vers-votre-logo>"
        position="center" 
        theme="#0abb90"
        sandbox="true"
        key="f0e123f0099011eca069c75559a38af2"
        src="https://cdn.kkiapay.me/k.js">
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection
