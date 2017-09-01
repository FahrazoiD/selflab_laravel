<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      {{--  <meta name="viewport" content="width=device-width, initial-scale=1">  --}}
      
      <link rel="stylesheet" href="./css/font-awesome.min.css">
      <link rel="stylesheet" href="./css/app.css">

      <title>@yield('title')</title>
  </head>

  <body>

    {{--  Main content wrapper  --}}
    <div class="page">
      
      {{--  Header view is not similar for home & others  --}}
      @yield('header')

      {{--  Content has various view for pages --}}
      @yield('content')

      {{--  Similar views  --}}
      @include('includes.feedback')
      @include('includes.footer')

    </div>

    {{--  Extra js script  --}}
    <script src="./js/jquery.min.js"></script>
    <script src="./js/instafeed.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>
