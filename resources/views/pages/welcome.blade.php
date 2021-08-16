@extends('layouts.template')

@section('stylesheet')
  <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
  <header>
    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_1.png") }}" alt="SLIDE">
                <div class="carousel-caption">
                    <h1>
                        Bienvenue sur le portail numérique des Eglises Centre Jésus Pour Réussir
                    </h1>
                    <h5>
                        Notre mission c'est de démontrer qu'avec Christ, on  peut réussir dans tous les domaines de notre vie.
                    </h5>
                </div>
                
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_2.jpg") }}" alt="SLIDE">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_3.jpg") }}" alt="SLIDE">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset("images/SLIDE_2.jpg") }}" alt="SLIDE">
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"></button>
        </div>            
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel">
            <h1 class="fas fa-arrow-circle-left p-5"></h1>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel">
            <h1 class="fas fa-arrow-circle-right p-5"></h1>
        </button>

    </div>
  </header>
  <div class="main px-5">
    <div class="annonces">
        <marquee behavior="" direction="">Jésus est Seigneur.</marquee>
    </div>
    <div class="about-us text-center">
        <div class="section-title">
            <h1> A propos</h1>
            <div class="trait"></div> <br>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error voluptas non rerum fugit aperiam ipsa, eveniet minus ab corrupti labore quia atque eius qui illum voluptatibus quaerat architecto ut odit asperiores necessitatibus quos id. Aliquid illum praesentium voluptatibus eius sed, eum nam dicta animi est incidunt debitis! Amet laudantium praesentium, ut suscipit, modi corrupti atque nobis non exercitationem ea enim sequi sit aliquid necessitatibus alias vitae veritatis impedit consectetur rem consequatur eveniet. Sed beatae ex aut, vitae nisi dignissimos, nihil sequi veritatis commodi ipsam molestias reprehenderit inventore minima voluptatem iste molestiae quis iusto cum incidunt, voluptatum illum deserunt adipisci. Assumenda, pariatur? Molestias eligendi aut ipsam est nesciunt a, fuga quaerat. Quaerat asperiores maxime ipsum ratione deserunt blanditiis est, ipsam, beatae quae, officia neque eligendi in ad ex temporibus dolores. Beatae eos earum accusamus reprehenderit, maiores reiciendis culpa voluptatibus quasi, qui dolorum itaque! Laudantium voluptatem quam officiis quos ipsum, repellat vero tenetur in ut doloribus vel quae ad? Minus, ut cumque rerum quia a saepe, voluptate, adipisci maxime iure ea perspiciatis reprehenderit maiores odio nostrum necessitatibus vel fugit. Incidunt, amet modi maiores voluptates, molestias neque eum alias possimus eaque obcaecati dolorum libero itaque! Amet molestiae at unde. Corrupti quaerat explicabo officia?
            <a href="{{ url("about-us") }}">lire plus</a>                
        </p>
    </div>
    <div class="recentMessages mb-5">
        <div class="section-title">
            <h1> Récents Messages</h1>
            <div class="trait"></div> <br>
        </div>
      
        <div class="Messages pb-4">
              <div class="filter pb-3 mt-5">
                <select name="orateur" class="form-select">
                  <option disabled selected>Orateurs</option>
                  <option value="">Edgar</option>
                  <option value="">Marc</option>
                  <option value="">Raoul WAFO</option>
                </select>
                <select name="serie" class="form-select">
                  <option disabled selected>Séries</option>
                  <option value="">Croisade 2020-2021</option>
                  <option value="">Séminaire 2019-2020 (Jeune Lève toi)</option>
                  <option value="">Femmes.........</option>
                </select>
              </div>
              <div class="messagesOnMainPage mb-3">
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_1.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_4.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_2.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_3.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Ev Reynold TOKANOU </div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_4.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_1.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_2.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Pasteur Hermione GUIDIBI</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
                <div class="singleMessage">
                  <a href="https://youtube.com" target="_blank">
                    <img src="{{ asset("images/card_3.png") }}" alt="IMAGE">
                    <i class="fas fa-play"></i>
                  </a>
                  <div class="messageInfos pt-2 px-2">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ab consequuntur quasi architecto. Voluptate assumenda soluta laudantium expedita laborum ratione!</p>
                    <div class="additionnalInfos">
                      <div class="fw-bold">Ev Reynold TOKANOU</div>
                      <small> 10 Août 2021</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="messages-pagination-container"></div>
              
        </div>
          
    </div>
    <div class="newInKingdom">
        <div class="section-title">
            <h1> Nouveau dans le Royaume</h1>
            <div class="trait"></div> <br>
            <p>Que dois-je savoir ?</p>

        </div>
        <div class="lessons p-5 mb-5">
          <div class="lesson">
            <a href="{{ url('lessons/cours-de-bapteme') }}"> <img src="{{ asset("images/lesson_1.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-objectif-de-vie') }}"> <img src="{{ asset("images/lesson_2.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/naitre-et-grandir-dans-le-royaume') }}"> <img src="{{ asset("images/lesson_3.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-de-la-reussite') }}"> <img src="{{ asset("images/lesson_4.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-des-fondements-de-la-foi') }}"> <img src="{{ asset("images/lesson_5.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-des-evangelistes-missionnaires') }}"> <img src="{{ asset("images/lesson_6.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-esther') }}"> <img src="{{ asset("images/lesson_7.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/ecole-pastorale') }}"> <img src="{{ asset("images/lesson_9.png") }}" alt="LESSON"> </a>
          </div>
          <div class="lesson">
            <a href="{{ url('lessons/campus-de-mariage') }}"> <img src="{{ asset("images/lesson_8.png") }}" alt="LESSON"> </a>
          </div>
        </div>
    </div>
    <div class="testimonies mb-5">
        <div class="section-title">
            <h1> Témoignages</h1>
            <div class="trait"></div> <br>
        </div>
        <div class="testimonieSpace">
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> Calavi </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> COTONOU </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> MENONTIN </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> AGLA </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> GODOMEY </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> DJIDJE </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
          <div class="singleTestimony">
            <div class="userCity text-end text-uppercase"> Porto-Novo </div>
            <div class="testimonyContent bg-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, unde?
            </div>
            <div class="username fw-bold">
              Mr John AAAAAAA
            </div>
          </div>
        
        </div>
        <div class="testimony-pagination-container"></div>
        <div>
          <button class="testimony-button">Laisser un témoignage</button>
        </div>
    </div>
    <div class="library">
        <div class="section-title">
            <h1> Bibliothèque</h1>
            <div class="trait"></div> <br>
        </div>
        <div class="books-content p-5">
          <div class="book">
            <a href="#" target="_blank">
              <img src="{{ asset("images/card_1.png") }}" alt="IMAGE">
            </a>
            <div class="book-infos">
              <div class="bookTitle px-1 pt-2">
                Lorem ipsum dolor.
              </div>
              <div class="bookOtherInfos px-1 pb-1 d-flex justify-content-between">
                <div class="bookPrice">$24.99</div>
                <div class="badge"> Payer </div>
              </div>
            </div>
          </div>
          
          <div class="book">
            <a href="#" target="_blank">
              <img src="{{ asset("images/card_2.png") }}" alt="IMAGE">
            </a>
            <div class="book-infos">
              <div class="bookTitle px-1 pt-2">
                Lorem ipsum dolor.
              </div>
              <div class="bookOtherInfos px-1 pb-1 d-flex justify-content-between">
                <div class="bookPrice">$24.99</div>
                <div class="badge"> Payer </div>
              </div>
            </div>
          </div>
          
          <div class="book">
            <a href="#" target="_blank">
              <img src="{{ asset("images/card_3.png") }}" alt="IMAGE">
            </a>
            <div class="book-infos">
              <div class="bookTitle px-1 pt-2">
                Lorem ipsum dolor.
              </div>
              <div class="bookOtherInfos px-1 pb-1 d-flex justify-content-between">
                <div class="bookPrice">$24.99</div>
                <div class="badge"> Payer </div>
              </div>
            </div>
          </div>
          
          <div class="book">
            <a href="#" target="_blank">
              <img src="{{ asset("images/card_4.png") }}" alt="IMAGE">
            </a>
            <div class="book-infos">
              <div class="bookTitle px-1 pt-2">
                Lorem ipsum dolor.
              </div>
              <div class="bookOtherInfos px-1 pb-1 d-flex justify-content-between">
                <div class="bookPrice">$24.99</div>
                <div class="badge"> Payer </div>
              </div>
            </div>
          </div>
          
        </div>
    </div>
  </div>

  <div class="join-us mb-5">
      <div class="section-title">
          <h1> Contactez-nous</h1>
          <div class="trait"></div> <br>
      </div>
      <div class="form py-5">
        <form action="#" method="POST">
          <input type="text" placeholder="Sujet" class="form-control" name="topic">
          <div class="userInfos">
            <input type="text" placeholder="Nom et Prénoms" class="form-control" name="username">
            <input type="email" placeholder="E-mail" class="form-control" name="userEmail">
          </div>
          <textarea name="userMessage" rows="10" class="form-control"></textarea>
          <input type="submit" value="Envoyer" id="join-us-submit-button">
        </form>
      </div>
  </div>
  @include('pages.newsletterpopup')
  @include('pages.testimonypopup')

  <script>
    $(function(){
      // Pagination for testimoies
      let testimonies = $(".singleTestimony");
      let testimoniesNumber = testimonies.length;;
      let testimonyperPage  = 3;

      testimonies.slice(testimonyperPage ).hide();

      $(".testimony-pagination-container").pagination({
        items : testimoniesNumber,
        itemsOnPage : testimonyperPage ,
        prevText : "Précédent",
        nextText : "Suivant",
        onPageClick : function(pageNumber)
        {
          let showFrom = testimonyperPage  * (pageNumber - 1);
          let showTo = showFrom + testimonyperPage ;
          testimonies.hide().slice(showFrom, showTo).show();
        }
      });

      // Pagination for recent messages .messages-pagination-container
      let messages = $(".singleMessage");
      let messagesNumber = messages.length;
      let messageperPage = 9;

      messages.slice(messageperPage).hide();

      $(".messages-pagination-container").pagination({
        items : messagesNumber,
        itemsOnPage : messageperPage,
        prevText : "Précédent",
        nextText : "Suivant",
        onPageClick : function(pageNumber)
        {
          let showFrom = messageperPage * (pageNumber - 1);
          let showTo = showFrom + messageperPage;
          messages.hide().slice(showFrom, showTo).show();
        }
      });

      setTimeout(popupNewsletter, 5000);

      function popupNewsletter(){
        $("#popupNewsletter").fadeIn();
      }
      
      $("#close-popupNewsletter").click(function(){
        $("#popupNewsletter").fadeOut();
      });

      $(".testimony-button").click(function(){
        $("#testimonypopup").show();
      });

      $(".testimony-button").click(function(){
        $("#testimonypopup").show();
      });

      $(".close-testimonypopup").click(function(){
        $("#testimonypopup").hide();
      });

    });

</script>
@endsection
      
@section('footer')
  @include('layouts.partials.footer')
@endsection