
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>{{ page_title($title ?? '') }}</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <style>
      footer {
          margin: 4em 0;
      }
    </style>

  </head>
  <body>
    @include('layouts/partials/_nav')

    @yield('content')

    @include('layouts/partials/footer')
      
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
</body>
</html>
