@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/dashboard.css") }}">
@endsection

@section('content')

    <div class="menu">
        <div class="user-full-name">USER FULLNAME</div>
        <div>
            <span class="fas fa-user"></span>
            <span class="profil"> Mon Profil</span>
        </div>
        <div> 
            <span class="fas fa-sign-out-alt"></span>
            <span> Déconnexion </span>
        </div>
    </div>

    <div class="dashboard">
        <div class="cjpr-logo">
            <a href="{{ route("welcome") }}">
                <img src="{{ asset("images/logo_cjpr.png") }}" alt="LOGO CJPR">
            </a>
        </div>
        <div class="topBar">
            <div class="user-full-name-in-topBar">User Full Name</div>
            <img src="{{ asset("images/MaleAvatar.jpg") }}" alt="AVATAR">
        </div>

        <div class="features">
            <div id="dash">Dashboard</div>
            <div>
                <span class="fas fa-user"></span>
                <span class="profil"> Mon Profil</span>
            </div>
            <div id="my-courses">
                <span class="fas fa-video"></span>
                <span> Mes cours </span> 
                <i class="fas fa-chevron-down" id="chevron"></i>
            </div>
            <ul>
                <li>Cours 1</li>
                <li>Cours 2</li>
                <li>Cours 3</li>
                <li>Cours 4</li>
                <li>Cours 5</li>
                <li>Cours 6</li>
                <li>Cours 7</li>
            </ul>

            <div>
                <span class="fas fa-sign-out-alt"></span>
                <span> Déconnexion </span>
            </div>
            <div class="socialNetworks">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>

        </div>
        <div class="display-feature">
            <div class="verse">
                <p id="verse-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui cupiditate inventore illum repudiandae expedita ex explicabo facere enim tenetur dolorem minus optio veritatis distinctio dignissimos, natus iure odio. Tempore provident sed vero nobis et veniam modi amet a possimus doloremque, magni exercitationem! Voluptates omnis quidem, itaque eius, nobis distinctio perspiciatis nesciunt debitis earum tempora maxime. Labore illum, voluptatem, nostrum architecto eveniet tempore amet officia vitae quos pariatur iusto? Voluptatibus voluptate delectus optio a, repellat vel sunt porro quibusdam harum voluptatum deleniti rerum inventore maxime esse non, libero perferendis amet nemo reiciendis tenetur, consectetur ullam? Nisi officia delectus, dolor deserunt provident vel nihil ea eius, quibusdam vitae doloribus tenetur laudantium sapiente? Nihil dolore atque ea rerum voluptates sequi soluta voluptas at esse ex, molestias reprehenderit dolorum quisquam excepturi odit sunt sed illum quasi dicta dolores minima eveniet velit incidunt distinctio! Ducimus temporibus ratione fuga quia sunt! Corporis praesentium, nostrum alias ex veniam assumenda doloremque tenetur expedita iste hic quos esse, vitae neque quo doloribus repellat quibusdam nesciunt harum ad quis. Reprehenderit rerum quis odit voluptatum eum libero, id cum nihil corrupti repellendus expedita quisquam beatae dicta nulla mollitia ipsa iure debitis ratione eligendi repudiandae vel et quia corporis. Explicabo, consequuntur ab!
                </p>
                <p id="verse-reference">Mathieu 20v3</p>
            </div>
        </div>
    </div>
    
    

    <script>
        $(function(){
            let topBarWidth = $("#course_to_search").width();

            $("#my-courses").click(function(){
                $("ul").slideToggle(500, function(){
                    if($("ul").is(":hidden")){
                        $("#chevron").prop("class","fas fa-chevron-down");
                    }
                    else{
                        $("#chevron").prop("class","fas fa-chevron-up");
                    }
                });
                

            });

            $("li").each(function(){
                $(this).click(function(){
                    $(this).css({
                        color : "#ffce2d",
                        borderLeft : "3px solid #ffce2d",
                    });
                    $(this).siblings().css({
                        color : "white",
                        borderLeft : "3px solid white"     
                    });
                });
            });

            $(".topBar img").click(function(){
                $(".menu").slideToggle(500);
            });

            $(".profil").click(function(){
                $(".display-feature").load("{{ route('profile-page') }}");
            });

            /* $("#dash").click(function(){
                $(".features").animate({
                    width  : "0px"
                });
            }); */
        });
    </script>
@endsection
