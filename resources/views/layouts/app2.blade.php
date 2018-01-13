<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--  <link href="{{ asset('css/main.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">
          <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
          <!--font-->
          <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
</head>
<!--style="  font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;-->
<body>
    <div id="app">
      <div class="topnav" id="myTopnav">
    <a href="/" class="active" style="  font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;"
    >Travel Kalsel</a>

        <a class="nav-link js-scroll-trigger" href="#services">Blog</a>

        <a class="nav-link js-scroll-trigger" href="#portfolio">Open Trip</a>

        <a class="nav-link js-scroll-trigger" href="#about">Private Trip</a>

        <a class="nav-link js-scroll-trigger" href="/about">About Us</a>

        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>


    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div>


          <!--    <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news" class="pull-right">News</a>
  <a href="#contact" class="pull-right">Contact</a>
  <a href="#about" class="pull-right">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
-->

    </div>
  @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/agency.min.js') }}"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
