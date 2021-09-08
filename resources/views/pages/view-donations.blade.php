@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/view-donation.css") }}">
@endsection

@section('content')

  <div class="donators-container ">
    <table class="table table-striped">
      <thead>
        <tr class="">
          <th>Noms</th>
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