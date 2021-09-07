@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/registered-members.css") }}">
@endsection

@section('content')

    <div class="registered-members">
        <div class="search-a-member">
            <input type="text" name="look-for-member" id="look-for-member" placeholder="Rechercher un membre...">
        </div>
        
        <div class="members-container">

            @for ($i = 0; $i < 5; $i++)
                <div class="member my-3">
                    <div class="member-profile-picture">
                        <img src="{{ asset("images/MaleAvatar.jpg") }}" alt="PICTURE" >
                    </div>
                    <div class="member-infos">
                        <div class="member-fullname fw-bold">Jonas JOHN</div>
                        <a class="member-email text-primary" href="mailto:adresse@gmail.com">adresse@gmail.com</a>
                        <span class="d-flex justify-content-between">
                            <a href="tel:+229 97979797" class="member-contact">+22997979797</a>
                            <small class="fst-italic fw-bold"> Inscrit le 07/09/2021</small>
                        </span>
                    </div>
                    <div class="config-member-button">
                        <h5 class="fas fa-user-lock text-warning"></h5>
                        <h5 class="fas fa-user-slash text-danger"></h5>
                    </div>
                </div>
            @endfor

        </div>
    </div>

@endsection