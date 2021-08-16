@extends('layouts.template')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/lessons.css") }}">
@endsection

@section('menu')
  @include('layouts.partials.menu')
@endsection

@section('content')
    <div class="lesson-container pt-5">
        <div class="lesson_image text-uppercase fw-bold text-light"> </div>
        <div class="lesson_text">
            <div class="lesson-title pb-3">
                <h5> Lesson title </h5>
                <div class="trait"></div> 
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, excepturi? Exercitationem quisquam perferendis, aspernatur quis non, eum itaque obcaecati sunt impedit incidunt, quae eius ex. Facere, voluptas? Consequuntur recusandae quis animi? Laudantium unde autem repellat a consequatur, architecto sint laborum commodi placeat aut, voluptas ea porro. Ea at quae ad, voluptas a saepe asperiores cupiditate repudiandae! Iusto quibusdam natus optio minus ab dolore! Dignissimos eaque commodi recusandae ratione ipsa distinctio inventore sit. Porro, consectetur doloribus provident alias in quis ducimus consequatur voluptate exercitationem eos eius voluptatum expedita ut maxime incidunt eligendi. Quaerat rerum dolor ipsum impedit eum repellendus numquam sit esse magni cumque ex, fugit beatae enim eveniet tempora veniam, accusamus id distinctio illo recusandae reprehenderit necessitatibus. Blanditiis enim ab eos non omnis expedita quo exercitationem dolores quaerat, nobis modi vitae sit minus error repellat. At deleniti maxime earum autem, voluptatibus sapiente, odit ad nam blanditiis voluptate nisi fuga eaque repellendus rerum vero facere id voluptatem consequuntur cupiditate, alias animi optio incidunt assumenda officiis? Eos magnam consectetur consequuntur. Amet velit nobis nulla ipsum esse laudantium, distinctio, fugiat tempora saepe officia aperiam fuga eius sapiente a asperiores ad ea repudiandae. Possimus alias expedita, aut sapiente ullam natus qui quas voluptates enim!    
            </p>
        </div>
    </div>
@endsection

@section('footer')
  @include('layouts.partials.footer')
@endsection