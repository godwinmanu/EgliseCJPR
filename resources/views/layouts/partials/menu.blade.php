<nav>
    <div class="logo pr-2">
        <a href="#">
            <img src="{{ asset("images/logo_cjpr.png") }}" alt="LOGO CJPR" width="100" height="70">
        </a>
    </div>

    <div class="navBarItem">
        <ul class="navBarElements">
            <li> <a href="{{ url("/") }}" class="text-uppercase">Accueil</a></li>
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
                    <li> <a href="{{ url("videos") }}" class="text-uppercase">Vidéos</a>  </li>
                    <li> <a href="{{ url("audios") }}" class="text-uppercase">Audios</a> </li>
                    <li> <a href="{{ url("Images") }}" class="text-uppercase">Images</a> </li>
                 </ul>
            </li>
            <li> <a href="{{ url("donate") }}" class="text-uppercase">Faire un don</a></li>
            <li> <a href="/#join-us" class="text-uppercase">Contacts</a></li>
            <li id="signup-li"> <a href="#"> S'INSCRIRE </a> </li>
            <li> <a class="btn" href="#"> SE CONNECTER </a> </li>
        </ul>
    </div>
</nav>

<script>
    $(window).scroll(function(){
        if($(this).scrollTop() > 300 ){
            $("nav").addClass("scrolled");
        }
        else{
            $("nav").removeClass("scrolled");
        }
    });
</script>