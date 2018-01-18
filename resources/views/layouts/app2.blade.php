<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kalseltrip</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--  <link href="{{ asset('css/main.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">
          <link href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
          <!--font-->
          <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
</head>
<!--style="  font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;-->
<body>
    <div id="app">
      <div class="topnav" id="myTopnav">
    <a href="/" class="active" style="  font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;"
    ><b>Kalsel </b>trip</span></a>


        <a class="nav-link js-scroll-trigger" href="/">Open Trip</a>
        <a class="nav-link js-scroll-trigger" href="/">Blog</a>

        <a class="nav-link js-scroll-trigger" href="/">About Us</a>

        <a class="nav-link js-scroll-trigger" href="/">Contact</a>


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
