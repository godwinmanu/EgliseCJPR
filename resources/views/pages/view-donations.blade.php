@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/view-donation.css") }}">
@endsection

@section('content')

    <div class="donators-container">

        @for ($i = 0; $i < 5; $i++)
            <div class="donator my-3">
                <div class="gift-icon"> &#x1f381;</div>
                <div class="donator-infos">
                    <div class="donator-fullname fw-bold">Jonas JOHN</div>
                    <a href="tel:+229 97979797" class="donator-contact">+22997979797</a>
                </div>
                <div class="other-infos">
                    <div class="text-uppercase">Lomé (Togo)</div>
                    <div class="badge bg-warning fs-6">1.000.000 Francs CFA</div>
                </div>
            </div>
        @endfor

    </div>
@endsection