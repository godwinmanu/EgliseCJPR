@extends("layouts.template")

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset("css/newsletter-subscribers.css") }}">
@endsection

@section('content')
<div class="newsletter-subscribers-container ">
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="text-center">N°</th>
          <th class="text-center">Emails</th>
        </tr>
      </thead>

      <tbody>
        @for ($i = 0; $i < 10; $i++)
          <tr>
            <td class="order-number text-center"> {{ $i + 1 }}</td>
            <td class="commanded-book text-center">
                <a href="mailto:adresse@gmail.com">adresse@gmail.com</a>
            </td>
          </tr> 
        @endfor
      </tbody>
    </table>
  </div>
@endsection
