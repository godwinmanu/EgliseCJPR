<nav>
    <div class="logo pr-2">
        <a href="{{ route("welcome") }}">
            <img src="{{ asset("images/logo_cjpr.png") }}" alt="LOGO CJPR" width="100" height="70">
        </a>
    </div>

    <div class="navBarItem">
        <ul class="navBarElements">
            <li> <a href="{{ route("welcome") }}" class="text-uppercase">Accueil</a></li>
            <li> <a href="{{ url("about-us") }}" class="text-uppercase"> à propos</a></li>
            <li class="eglises"> 
                <a href="#" class="text-uppercase">Nos églises <i class="fas fa-angle-down"></i></a>
                <ul class="churchesSubMenu py-3">
                   <li> <a href="{{ route("eglises","TRN") }}" class="text-uppercase">Temple Refuge des Nations (TRN)</a>  </li>
                   <li> <a href="{{ route("eglises","TBI") }}" class="text-uppercase">Temple Bethsaleel Israël (TBI)</a> </li>
                   <li> <a href="{{ route("eglises","TPG") }}" class="text-uppercase">Temple Porte de La Grâce (TPG)</a> </li>
                   <li> <a href="{{ route("eglises","TAT") }}" class="text-uppercase">Temple Arche du Triomphe (TAT)</a> </li>
                   <li> <a href="{{ route("eglises","TTG") }}" class="text-uppercase">Temple Trône de Grâce (TTG)</a> </li>
                   <li> <a href="{{ route("eglises","TPS") }}" class="text-uppercase">Temple Porte de Salut (TPS)</a> </li>
                   <li> <a href="{{ route("eglises","TCG") }}" class="text-uppercase">Temple Cité de la Grâce (TCG)</a> </li>
                   <li> <a href="{{ route("eglises","TCG") }}" class="text-uppercase">Temple Cité de la Grâce (TCG)</a> </li>
                </ul>
            </li>
            <li class="mediatheque"> 
                <a href="#" class="text-uppercase">Médiathèque <i class="fas fa-angle-down"></i> </a>
                <ul class="mediathequeSubMenu py-3">
                    <li> <a href="{{ route("videos") }}" class="text-uppercase">Vidéos</a>  </li>
                    <li> <a href="{{ route("audios") }}" class="text-uppercase">Audios</a> </li>
                    <li> <a href="{{ route("images") }}" class="text-uppercase">Images</a> </li>
                 </ul>
            </li>
            <li> <a href="{{ url("donate") }}" class="text-uppercase">Faire un don</a></li>
            <li> <a href="/#join-us" class="text-uppercase">Contacts</a></li>
            <li id="signup-li"> <a href="{{ route("signup") }}" class="sign-up-link"> S'INSCRIRE </a> </li>
            <li> <a class="btn log-in-link" href="{{ route("login") }}"> SE CONNECTER </a> </li>
        </ul>
    </div>
    
    <div id="menu-bars">
        <button class="fas fa-bars"></button>
    </div>

</nav>

<script>
    let userScreenWidth = screen.width;

    if(userScreenWidth > 576){
        $(window).scroll(function(){
            if($(this).scrollTop() > 100 ){
                $("nav").addClass("scrolled");
            }
            else{
                $("nav").removeClass("scrolled");
            }
        });
    }
    // else{

    // }
    

    $(function(){
        $(".fa-bars").click(function(){
            $("nav").slideToggle();
            // $(".navBarElements").slideToggle();
        });
    });
</script>