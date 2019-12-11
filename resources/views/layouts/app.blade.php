<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portifólio</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
  
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">  

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Portifólio</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        @yield('menu')
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">
    @include('flash::message')
    @yield('content')
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  
  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/resume.js') }}" defer></script>
  <script src="{{ asset('js/impl.js') }}" defer></script>


</body>

</html>