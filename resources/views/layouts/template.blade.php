<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> {{ env("APP_NAME")}} </title>
      <script src="{{ asset("js/jquery-3.6.0.js") }}"></script>
      <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
      <script src="{{ asset("js/jquery.simplePagination.js") }}"></script>
      <script src="{{ asset("js/bootstrap.min.js") }}"></script>
      <link rel="stylesheet" href="{{ asset("Font awesome/css/all.min.css") }}">
      <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
      <link rel="shortcut icon" href="{{ asset("images/logo_cjpr.png") }}">
      <link rel="stylesheet" href="{{ asset("css/style.css") }}">
      @yield('stylesheet')
</head>
<body>
      @yield("menu")
      @yield("content")
      @yield("footer")
</body>
</html>