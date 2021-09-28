@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/admin.css") }}">
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
            <ul>
                <li id="dash">Dashboard</li>

                <li>
                    <span class="fas fa-user"></span>
                    <span class="profil"> Mon Profil</span>
                </li>
    
                <li>
                    <span class="fas fa-user-plus"></span>
                    <span class="register-admin"> Créer un compte</span>
                </li>
    
                <li id="media">
                    <div id="media-title">
                        <div class="fas fa-film"></div>
                        <div> Médiathèque </div> 
                        <div class="fas fa-chevron-down" id="chevron"></div>
                    </div>

                    <ul>
                        <li id="videos">Vidéos</li>
                        <li id="audios">Audios</li>
                        <li id="images">Images</li>
                    </ul>
    
                </li>
    
                <li>
                    <span class="far fa-comment-dots"></span>
                    <span class="testimonies"> Témoignages </span>
                </li>
    
                <li id="bookshop">
                    <div id="bookshop-title">
                        <span class="fas fa-book"></span>
                        <span> Librairie RHEMA </span>
                        <span class="fas fa-chevron-down" id="chevron"></span>
                    </div>

                    <ul>
                        <li id="post-books">Ajout de livres</li>
                        <li id="book-commands">Commandes de livres</li>
                    </ul>
                </li>
    
                <li>
                    <span class="fas fa-bell"></span>
                    <span class="news"> Annonces</span>
                </li>
    
                <li>
                    <span class="fas fa-edit"></span>
                    <span class="courses"> Cours </span>
                </li>
    
                <li>
                    <span class="fas fa-gift"></span>
                    <span class="view-donations"> Dons </span>
                </li>
    
                <li>
                    <span class="fas fa-file"></span>
                    <span class="all-resources"> Ressources </span>
                </li>
    
                <li>
                    <span class="fas fa-envelope"></span>
                    <span class="newsletter"> Newsletter </span>
                </li>
    
                <li>
                    <span class="fas fa-users"></span>
                    <span class="registered-members"> Membres inscrits </span>
                </li>

                <li>
                    <span class="fas fa-sign-out-alt"></span>
                    <span> Déconnexion </span>
                </li>
            </ul>
            
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

            $("ul").css({padding:"0px"});

            $("#media").click(function(){
                $("#media ul").slideToggle(500, function(){
                    if($("#media ul").is(":hidden")){
                        $("#media #chevron").prop("class","fas fa-chevron-down");
                    }
                    else{
                        $("#media #chevron").prop("class","fas fa-chevron-up");
                    }
                });
            });

            $("#bookshop").click(function(){
                $("#bookshop ul").slideToggle(500, function(){
                    if($("#bookshop ul").is(":hidden")){
                        $("#bookshop #chevron").prop("class","fas fa-chevron-down");
                    }
                    else{
                        $("#bookshop #chevron").prop("class","fas fa-chevron-up");
                    }
                });
            });

            $(".topBar img").click(function(){
                $(".menu").slideToggle(500);
            });

            $(".profil").click(function(){
                $(".display-feature").load("{{ route('profile-page') }}");
            });

            $("#media #videos").click(function(){
                $(".display-feature").load("{{ route('upload-videos') }}");
            });

            $("#media #audios").click(function(){
                $(".display-feature").load("{{ route('upload-audios') }}");
            });

            $("#media #images").click(function(){
                $(".display-feature").load("{{ route('upload-images') }}");
            });




            $(".register-admin").click(function(){
                $(".display-feature").load("{{ route('register-admin') }}");
            });

            $("#book-commands").click(function(){
                $(".display-feature").load("{{ route('book-commands') }}");
            });

            $("#post-books").click(function(){
                $(".display-feature").load("{{ route('post-books') }}");
            });


            $(".news").click(function(){
                $(".display-feature").load("{{ route('news') }}");
            });

            $(".courses").click(function(){
                $(".display-feature").load("{{ route('courses') }}");
            });

            $(".registered-members").click(function(){
                $(".display-feature").load("{{ route('registered-members') }}");
            });

            $(".testimonies").click(function(){
                $(".display-feature").load("{{ route('testimonies') }}");
            });

            $(".view-donations").click(function(){
                $(".display-feature").load("{{ route('view-donations') }}");
            });

            $(".newsletter").click(function(){
                $(".display-feature").load("{{ route('newsletter-subscribers') }}");
            });

            $(".all-resources").click(function(){
                $(".display-feature").load("{{ route('all-resources') }}");
            });

        });
    </script>
@endsection
