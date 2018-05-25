<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @yield('css')

  </head>
  <body>
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>
    <script src="{{ asset('/plugins/jquery/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.js') }}" charset="utf-8"></script>
    @yield('js')
  </body>
</html>
