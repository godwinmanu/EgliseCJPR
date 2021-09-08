@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/registered-members.css") }}">
@endsection

@section('content')

{{--     <div class="search-a-member">
        <input type="text" name="look-for-member" id="look-for-member" placeholder="Rechercher un membre...">
    </div>
 --}}    <div class="registered-members">

        <table class="table table-striped">
            <thead>
                <tr>
                <th>Noms</th>
                <th>Prénoms</th>
                <th>Contact</th>
                <th>Ville</th>
                <th>Montant (FCFA)</th>
                <th>Type de don</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td class="member-name">JOHN</td>
                    <td class="member-lastnames">Jonas Marc</td>
                    <td class="member-tel">+22997979797</td>
                    <td class="member-email">Abomey-Calavi</td>
                    <td class="member-email">100.000</td>
                    <td class="member-contact">Offrande</td>
                </tr> 
                @endfor
            </tbody>
        </table>
    </div>

@endsection