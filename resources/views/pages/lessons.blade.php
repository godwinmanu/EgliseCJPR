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

    <div id="collect">
        {{ $lessonsCollection = collect([
            "cours-de-bapteme",
            "ecole-objectif-de-vie",
            "naitre-et-grandir-dans-le-royaume",
            "ecole-de-la-reussite",
            "ecole-des-fondements-de-la-foi", 
            "ecole-des-evangelistes-missionnaires",
            "ecole-esther",
            "ecole-pastorale",
            "campus-de-mariage"
            ]) }}
    </div>

    @if ($lessonsCollection->contains($lesson))    
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
                        </p>
                    </div>
                </div>
                @break
            @default
            {{ view("pages.welcome") }}
        @endswitch
    @else
        {{ view("pages.welcome") }}
    @endif

    <script>
        $("#collect").hide();
    </script>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection