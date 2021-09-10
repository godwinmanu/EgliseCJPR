@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/view-donation.css") }}">
@endsection

@section('content')

  <div id="treasury-filter">
    <div class="beginning-time-filter">
      <select name="Months" class="beginning-month">
        <option selected disabled> Mois </option>
        <option value="Jan"> Janvier </option>
        <option value="Feb"> Février </option>
        <option value="Mar"> Mars </option>
        <option value="Apr"> Avril </option>
        <option value="May"> Mai </option>
        <option value="June"> Juin </option>
        <option value="July"> Juillet </option>
        <option value="Aug"> Août </option>
        <option value="Sep"> Septembre </option>
        <option value="Oct"> Octobre </option>
        <option value="Nov"> Novembre </option>
        <option value="Dec"> Décembre </option>
      </select>
      <select name="Years" class="beginning-year">
          <option selected disabled> Années </option>
          <option value="2019"> 2019 </option>
          <option value="2020"> 2020 </option>
          <option value="2021"> 2021 </option>
      </select>
    </div>
    <div class="text-uppercase fw-bold">à</div>
    <div class="end-time-filter">
      <select name="Months" class="end-month">
        <option selected disabled> Mois </option>
        <option value="Jan"> Janvier </option>
        <option value="Feb"> Février </option>
        <option value="Mar"> Mars </option>
        <option value="Apr"> Avril </option>
        <option value="May"> Mai </option>
        <option value="June"> Juin </option>
        <option value="July"> Juillet </option>
        <option value="Aug"> Août </option>
        <option value="Sep"> Septembre </option>
        <option value="Oct"> Octobre </option>
        <option value="Nov"> Novembre </option>
        <option value="Dec"> Décembre </option>
      </select>
      <select name="Years" class="end-year">
        <option selected disabled> Années </option>
        <option value="2019"> 2019 </option>
        <option value="2020"> 2020 </option>
        <option value="2021"> 2021 </option>
      </select>
    </div>
    <div class="gift-type">
      <select name="gift-type-select" class="gift-type-select">
        <option selected disabled> Type de don </option>
        <option value="tout"> Tout </option>
        <option value="dîme"> Dîme </option>
        <option value="offrande"> Offrande </option>
        <option value="evangelisation"> Evangélisation </option>
      </select>
    </div>
    <div class="total-amount">
      <span class="fw-bold">SOMME : </span>
      <span class="badge p-2 fw-bold">500.000 Francs CFA</span>
    </div>
  </div>

  <div class="donators-container ">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénoms</th>
          <th>Contact</th>
          <th>Ville</th>
          <th>Montant (FCFA)</th>
          <th>Type de don</th>
        </tr>
      </thead>

      <tbody>
        @for ($i = 0; $i < 10; $i++)
          <tr>
            <td>JOHN</td>
            <td>Jonas Marc</td>
            <td>+22997979797</td>
            <td>Abomey-Calavi</td>
            <td>100.000</td>
            <td>Offrande</td>
          </tr> 
        @endfor
      </tbody>
    </table>
  </div>
    

@endsection