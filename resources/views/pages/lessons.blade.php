@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/lessons.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')

    <div id="exhibition-image">
        <div> Nouveau dans le Royaume </div>
    </div>

        @switch($lesson)
            @case("cours-de-bapteme")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_1.png') }}" alt="IMAGE LESSON">   
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> Cours de Baptème </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            "Celui qui croira et sera baptisé sera sauvé, mais celui qui ne croira pas sera condamné" Marc 16v16. Tel est le verset qui constitue le fondement de ce cours. En effet, le baptême est une étape incontournable pour être sauvé. Il constitue un réel engagement, une décision très importante qui bouleverse positivement le mode de vie, la manière de penser et d’agir du nouveau converti. Ainsi, il faudrait comprendre entièrement la nécessité de cette décision et ses implications, avant de la prendre. Ce cours a pour but d’aider les aspirants au baptême à:
                                <ul>
                                    <li> Se préparer convenablement pour le baptême; </li>
                                    <li> Poser les fondements de la marche avec Jésus-Christ; </li>
                                    <li> Comprendre les implications de leur choix. </li>
                                </ul>  
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("ecole-objectif-de-vie")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light">
                        <div>
                            <img src="{{ asset('images/lesson_2.png') }}" alt="IMAGE LESSON">
                        </div>
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école d'Objectif de vie </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            Il existe 3 éducateurs dans la vie: La famille, l’école et l’église. Habituellement, le dernier éducateur est l’église. Celle-ci se charge de finaliser l’éducation de l'individu, en ôtant les ratés laissés par les deux éducateurs précédents. C'est dans cette veine que l'école d'objectif de vie, s'est donnée pour mission, de maintenir l'équilibre dans la vie de l’étudiant. Equilibre entre vie de foi et vie quotidienne. Cette école est une expérience bouleversante pour chaque participant, qui apprend à se connaître, découvre sa vocation céleste et les moyens de s’organiser pour parvenir à son accomplissement.
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fugiat exercitationem ipsum iure quaerat repellendus culpa necessitatibus praesentium modi obcaecati dolore magnam eius sunt adipisci illum aut, molestias ab consectetur sequi quos et. Maxime eveniet distinctio exercitationem suscipit fuga atque delectus, repellendus minus vero minima a excepturi error alias deserunt explicabo quam, neque expedita vitae recusandae! Ut, ratione cumque assumenda recusandae repellat inventore error suscipit quas, dolorem hic, in odio voluptatibus adipisci! Repudiandae eaque quos corporis odio vero nulla perferendis voluptates, accusamus error recusandae maiores voluptatem est porro at ullam cumque quam assumenda cum alias! Distinctio praesentium itaque odio nesciunt ad mollitia earum recusandae, ipsam, doloremque veritatis incidunt quis magnam consequuntur, dicta totam blanditiis excepturi placeat molestiae! Architecto asperiores doloribus eaque totam minus, libero veniam optio eligendi voluptates non. Tempore minima voluptatum fuga rerum recusandae minus, sequi ipsa. Nobis nam ea officia sit, obcaecati repellat quos quod, sapiente praesentium aliquam cum ipsum corporis, amet pariatur rerum alias illo? Blanditiis, voluptatum est dicta, fugiat exercitationem, ea nobis dolores veritatis illo eaque voluptatibus assumenda ducimus itaque consectetur! Sed repellendus provident, laudantium cupiditate enim doloribus temporibus quisquam iste recusandae voluptate illo facere laboriosam delectus! Iure ratione itaque, harum dicta possimus esse commodi sint?
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("naitre-et-grandir-dans-le-royaume")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <div>
                                <img src="{{ asset('images/lesson_3.png') }}" alt="IMAGE LESSON">
                            </div> 
                        </div>
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> Naître et grandir dans le Royaume </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            Après le baptême, les nouveaux baptisés deviennent de nouveaux croyants. Pour cette raison, ils ont besoin de suivi afin de grandir dans de bonnes conditions et de passer à une nouvelle étape. C’est d’ailleurs la mission assurée par le cours de NGR. Ce dernier est un creuset qui a essentiellement pour but de :
                                <ul>
                                    <li> 
                                        Permettre aux nouveaux croyants de comprendre les implications  de leur engagement vis-à-vis de Dieu; 
                                    </li>
                                    <li> 
                                        Donner aux nouveaux croyants des clés pour entretenir leur relation avec le Seigneur durant leur marche chrétienne; 
                                    </li>
                                    <li> 
                                        Conduire les nouveaux nés du statut de simples croyants à celui de disciples véritables; 
                                    </li>
                                    <li> 
                                        Amener chaque croyant à bâtir une vie solide sur Jésus-Christ le roc. 
                                    </li>
                                </ul>  
                                Les cours de NGR se chargent de  l'accompagnement des nouveaux croyants jusqu'à l'atteinte de la maturité.
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("ecole-de-la-reussite")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_4.png') }}" alt="IMAGE LESSON">
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école de la réussite </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            Aujourd’hui, un nombre incroyable de personnes pensent que la chrétienté ne rime pas vraiment avec la réussite. Pourtant, Dieu a formé pour nous des projets de paix et de bonheur, dans tous les domaines. Ainsi, s'inscrivant parfaitement dans le cadre de la vision des Églises Jésus Pour Réussir, cette école a pour but d’aider le peuple de Dieu à manifester et à démontrer concrètement par des enseignements théoriques et pratiques, comment réussir dans les affaires, le couple, la santé, etc. selon le référentiel divin. 
                            Tout comme l'école des fondements de la foi, celle de la réussite est aussi un moment de partage où les questions sont prises en compte.
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae eius dolor laudantium sequi, a porro facere atque quisquam aliquid vitae aliquam eveniet at maxime veritatis, ad officia! Cum rerum quibusdam asperiores doloremque? Consectetur nam saepe harum ipsa dolorum? Dolorum eum voluptatem, natus perferendis illo necessitatibus cum error similique repellendus, alias enim omnis atque, delectus inventore labore ipsam quo corrupti incidunt dolore quas deserunt. Aliquam labore asperiores est velit? Velit voluptatem quaerat corporis. In expedita esse facere asperiores autem, sunt accusamus voluptates temporibus, deserunt illo repudiandae aperiam quos quaerat dignissimos? Vel sint repellendus cupiditate eos at explicabo exercitationem expedita laudantium. Assumenda, ea deserunt qui ad laborum molestiae, impedit ullam optio veritatis consequatur nulla minus nobis eius natus fugit quae est ab debitis laboriosam voluptates facilis aliquam consequuntur beatae vitae. Rem quam veniam commodi ab ducimus accusantium, explicabo odit ut mollitia. Tempora accusantium quos iure, dicta omnis exercitationem, quod cum odio qui rem laudantium delectus, cumque ex illum ad? Obcaecati hic ducimus molestias veritatis a officia, eum consequatur cum quos debitis blanditiis omnis tempora fugit incidunt excepturi explicabo corporis aspernatur illo veniam aut. Eius officia ipsam beatae inventore et delectus sapiente error harum enim odit! Facere delectus veniam et dolor exercitationem minima.
                            </p>
                        </p>
                    </div>
                </div>
                @break
            @case("ecole-des-fondements-de-la-foi")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_5.png') }}" alt="IMAGE LESSON">
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école des fondements de la foi </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            "Ainsi la foi vient de ce qu'on entend, et ce qu'on entend vient de la parole de Christ" Romain 10v17. C'est en accord avec ce verset capital que l'école des fondements de la foi forme un creuset durant lequel les bases, d'une foi solide et sans faille sont posées dans la vie des croyants. La solidité de tout édifice dépend de la qualité des fondements sur lesquels il repose. L’école des fondements de la foi vise donc à bâtir une vie de foi solide. Pour ce faire, de nombreuses clés y sont partagées pour :
                                <ul>
                                    <li> Connaître Dieu; </li>
                                    <li> Demeurer attacher à Dieu même dans les épreuves; </li>
                                    <li> Obéir à Dieu afin de jouir de ses bénédictions; etc. </li>
                                </ul>  
                            Cette école donne également l’occasion de poser des questions liées à la foi.
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            </p>
                        </p>
                    </div>
                </div>
                @break
            @case("ecole-des-evangelistes-missionnaires")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_6.png') }}" alt="IMAGE LESSON">
                        </div>
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école des évangélistes missionnaires </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            L’école des Missionnaires est un creuset inspiré par le Saint-Esprit au couple pastoral Hermione et Edgard GUIDIBI. 
                            Son objectif principal est la formation théorique et pratique des futurs ministres de Dieu en ce qui concerne la mission de l’implantation de l’église, corps du Christ et de l’évangélisation. 
                            Considérée comme étant un point d’intersection entre tous les piliers ministériels, cette école vise à équiper ses étudiants en mettant la lumière sur les points essentiels qui constituent la base de la mission d’évangélisation et de la bonne nouvelle de Jésus Christ, à savoir: 
                            <ul>
                                <li>
                                    Les différents types d’évangélisation et leurs méthodes pratiques;
                                </li>
                                <li>
                                    Le principe de la multiplication;
                                </li>
                                <li>
                                    L’exploration et la prise de territoire pour l’implantation d’une église;
                                </li>
                                <li>
                                    Les caractères et la vie de l’évangéliste missionnaire et bien d’autres choses qui contribuent à la réussite de la mission que Dieu nous a confiée.
                                </li>
                            </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("ecole-esther")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_7.png') }}" alt="IMAGE LESSON">
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école d'Esther </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            L’école d’Esther est dédiée aux célibataires. Celle-ci a fondamentalement pour but d'équiper chaque célibataire pour la découverte de son âme-sœur. Elle transmet particulièrement aux participants, les bases et les critères indispensables pour le bon choix du conjoint de destinée. Elle apprend aussi à chaque participant, la gestion de sa relation d'amitié.
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum deserunt dolorum recusandae, molestiae, architecto sunt quisquam officiis neque temporibus corporis quos repellat nihil saepe facere error animi quibusdam accusamus dicta nemo dolorem qui velit natus! Optio minus amet assumenda fuga asperiores explicabo officia aspernatur consectetur odit commodi ea voluptate excepturi illum vel saepe dolorem quaerat aperiam deserunt inventore impedit quam, ratione eius enim? Quaerat modi labore sit voluptatibus, odit ad id mollitia praesentium eum cum molestiae accusamus sed fuga beatae saepe provident vitae illo ipsum! Neque recusandae unde consectetur. Officiis ullam, aliquam molestias exercitationem est sapiente qui blanditiis harum! Libero ad quas perspiciatis? Nisi delectus consectetur tempora provident blanditiis similique praesentium repudiandae, libero, officiis quod nihil illo minima laboriosam autem qui hic vel. Aut assumenda odio vel hic excepturi, fugiat, voluptates blanditiis omnis voluptate modi perspiciatis veritatis repellat optio sit officia repudiandae? Facilis, magnam. Enim, harum quae! Aliquam placeat deserunt ad laudantium laborum, numquam rerum iste laboriosam adipisci eveniet modi culpa quasi recusandae accusantium at delectus autem quae mollitia dignissimos sint quis impedit sed maxime minima! Iure culpa tempora aut perferendis, praesentium voluptatum quis quidem unde dolorem autem fugiat, qui magnam possimus, cupiditate laboriosam mollitia harum nam. Eveniet, excepturi doloribus.
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("ecole-pastorale")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_9.png') }}" alt="IMAGE LESSON">
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> école Pastorale </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            Inspirée par le Saint-Esprit, l'école pastorale poursuit un but principal. Celui de la formation intégrale de pasteurs au cœur de berger, considérant premièrement les intérêts de brebis et faisant paître le troupeau avec intégrité et sous la conduite entière du Saint-Esprit.
                            Les divers enseignements qui y sont donnés, convergent tous à la seule fin de former des bergers selon le cœur de Dieu. 
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum deserunt dolorum recusandae, molestiae, architecto sunt quisquam officiis neque temporibus corporis quos repellat nihil saepe facere error animi quibusdam accusamus dicta nemo dolorem qui velit natus! Optio minus amet assumenda fuga asperiores explicabo officia aspernatur consectetur odit commodi ea voluptate excepturi illum vel saepe dolorem quaerat aperiam deserunt inventore impedit quam, ratione eius enim? Quaerat modi labore sit voluptatibus, odit ad id mollitia praesentium eum cum molestiae accusamus sed fuga beatae saepe provident vitae illo ipsum! Neque recusandae unde consectetur. Officiis ullam, aliquam molestias exercitationem est sapiente qui blanditiis harum! Libero ad quas perspiciatis? Nisi delectus consectetur tempora provident blanditiis similique praesentium repudiandae, libero, officiis quod nihil illo minima laboriosam autem qui hic vel. Aut assumenda odio vel hic excepturi, fugiat, voluptates blanditiis omnis voluptate modi perspiciatis veritatis repellat optio sit officia repudiandae? Facilis, magnam. Enim, harum quae! Aliquam placeat deserunt ad laudantium laborum, numquam rerum iste laboriosam adipisci eveniet modi culpa quasi recusandae accusantium at delectus autem quae mollitia dignissimos sint quis impedit sed maxime minima! Iure culpa tempora aut perferendis, praesentium voluptatum quis quidem unde dolorem autem fugiat, qui magnam possimus, cupiditate laboriosam mollitia harum nam. Eveniet, excepturi doloribus.
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>
                @break
            @case("campus-de-mariage")
                <div class="lesson-container pt-5">
                    <div class="lesson_image text-uppercase fw-bold text-light"> 
                        <div>
                            <img src="{{ asset('images/lesson_8.png') }}" alt="IMAGE LESSON">
                        </div> 
                    </div>
                    <div class="lesson_text">
                        <div class="lesson-title pb-3">
                            <h5> Campus de Mariage </h5>
                            <div class="trait"></div> 
                        </div>
                        <p>
                            C’est un programme pour les personnes vivant en concubinage, les fiancés ou les mariés. Le campus du mariage bouleverse la conception courante du mariage. Il a pour objectif de révéler ce qu’est le mariage selon les desseins de Dieu. Plus que définir ce qu’est le mariage, ce campus est une école où tant les hommes que les femmes sont préparés au mariage. Il englobe la préparation spirituelle, celle physique et même celle psychologique. Toute cette préparation a pour objectif d’armer les futurs mariés ou les mariés à faire face aux réalités du mariage. Entre pleurs, rires et amour, la formation est de taille.
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum deserunt dolorum recusandae, molestiae, architecto sunt quisquam officiis neque temporibus corporis quos repellat nihil saepe facere error animi quibusdam accusamus dicta nemo dolorem qui velit natus! Optio minus amet assumenda fuga asperiores explicabo officia aspernatur consectetur odit commodi ea voluptate excepturi illum vel saepe dolorem quaerat aperiam deserunt inventore impedit quam, ratione eius enim? Quaerat modi labore sit voluptatibus, odit ad id mollitia praesentium eum cum molestiae accusamus sed fuga beatae saepe provident vitae illo ipsum! Neque recusandae unde consectetur. Officiis ullam, aliquam molestias exercitationem est sapiente qui blanditiis harum! Libero ad quas perspiciatis? Nisi delectus consectetur tempora provident blanditiis similique praesentium repudiandae, libero, officiis quod nihil illo minima laboriosam autem qui hic vel. Aut assumenda odio vel hic excepturi, fugiat, voluptates blanditiis omnis voluptate modi perspiciatis veritatis repellat optio sit officia repudiandae? Facilis, magnam. Enim, harum quae! Aliquam placeat deserunt ad laudantium laborum, numquam rerum iste laboriosam adipisci eveniet modi culpa quasi recusandae accusantium at delectus autem quae mollitia dignissimos sint quis impedit sed maxime minima! Iure culpa tempora aut perferendis, praesentium voluptatum quis quidem unde dolorem autem fugiat, qui magnam possimus, cupiditate laboriosam mollitia harum nam. Eveniet, excepturi doloribus.
                            </p>
                        </p>
                        <button class="btn btn-warning fw-bold subscribe-to-course">Je m'inscris à ce cours</button>
                    </div>
                </div>

                <div class="toast" data-bs-delay="5000">
                    <div class="toast-body">
                        Ce cours a été ajouté à votre dashboard. Nous vous
                        souhaitons une bonne suite. Que l'Eternel vous fortifie.
                    </div>
                </div>
                @break
            @default
            {{ view("pages.welcome") }}
        @endswitch

    <script>
        $(function(){
            $(".subscribe-to-course").click(function(){
                var toastElList = [].slice.call(document.querySelectorAll('.toast'));
                var toastList = toastElList.map(function (toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());

                $(this).replaceWith('<div class="badge">Cours Enrégistré</div>');
            });
        });
    </script>
  
  
      <!-- Popper.js first, then Bootstrap JS -->
    {{--   <script>
        /* document.getElementById("toastbtn").onclick = function() {
          var toastElList = [].slice.call(document.querySelectorAll('.toast'))
          var toastList = toastElList.map(function(toastEl) {
          // Creates an array of toasts (it only initializes them)
            return new bootstrap.Toast(toastEl) // No need for options; use the default options
          });
         toastList.forEach(toast => toast.show()); // This show them
     
          console.log(toastList); // Testing to see if it works
        };
  
      </script>  --}}
  
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection