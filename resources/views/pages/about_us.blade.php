@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/about_us.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div id="exhibition-image">
        <div> À propos</div>
    </div>

    <div class="about-container pt-5">
        <div class="about_image text-uppercase fw-bold text-light"> à propos</div>
        <div class="about_text">
            <div class="about-us-title pb-3">
                <h5> à propos</h5>
                <div class="trait"></div> 
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
            </p>
            <div class="church_social_network text-center">
                <a href="#"> <img src="{{ asset("images/facebook.png") }}" alt="FACEBOOK"> </a>
                <a href="#"> <img src="{{ asset("images/youtube.png") }}" alt="YOUTUBE"> </a>
            </div>
        </div>
    </div>

@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection