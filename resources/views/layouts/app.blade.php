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
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
           <div class="container">
             <a class="navbar-brand js-scroll-trigger" href="#header" style="font-family: 'Yellowtail', cursive;">Kalsel trip</span></a>
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               Menu
               <i class="fa fa-bars"></i>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ml-auto">
                 <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="#portfolio">Open Trip</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="#services">Blog</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="/about">About Us</a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                 </li>
               </ul>
             </div>
           </div>
         </nav>
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

</body>
</html>
