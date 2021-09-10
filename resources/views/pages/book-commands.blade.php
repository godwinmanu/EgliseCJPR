@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/book-commands.css") }}">
@endsection

@section('content')
<div class="donators-container ">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nom & Prénoms</th>
          <th>Livre commandé</th>
          <th>Quantité</th>
          <th>Lieu de livraison</th>
          <th>Contact du client</th>
          <th>Détails</th>
          <th>Statut</th>
        </tr>
      </thead>

      <tbody>
        @for ($i = 0; $i < 10; $i++)
          <tr>
            <td class="client-fullname">JOHN Jonas Marc</td>
            <td class="commanded-book">La présence..</td>
            <td class="quantity"> 05 </td>
            <td class="client-location">Porto-Novo</td>
            <td class="client-phone-number">+22997979797</td>
            <td class="other-details">Je veux...</td>
            <td>
                <button class="command-status">En cours</button>
            </td>
          </tr> 
        @endfor
      </tbody>
    </table>
  </div>

  <script>
      $(function(){
          $(".command-status").click(function(){
              $(this).text("Livré");
              $(this).css({
                  border: "0.3px solid #0abb90",
                  color : "#0abb90"
                  });
          });
      });
  </script>
@endsection
