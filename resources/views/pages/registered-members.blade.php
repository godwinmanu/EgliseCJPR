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
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Supprimer</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td class="member-name">JOHN</td>
                    <td class="member-lastnames">Jonas Marc</td>
                    <td class="member-tel">+22997979797</td>
                    <td class="member-email">adresse@gmail.com</td>
                    <td class="member-city">Cotonou</td>
                    <td><i class="delete-member text-danger fas fa-trash"></i></td>
                </tr> 
                @endfor
            </tbody>
        </table>
    </div>

@endsection