<!DOCTYPE html>
<html>

<!-- Mirrored from demo.bootstrapious.com/admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2017 18:12:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Easy Tour - Área administrativa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('asset/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('asset/img/favicon.ico')}}">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="../../use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="../../file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="{{route('action', ['acao'=>'admin'])}}" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>Easy </span><strong>Tour</strong></div>
                  <div class="brand-text brand-small"><strong>ET</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" class="menu-btn active" ><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->

                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout">Sair<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('asset/img/easy_tour_logo.png')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Easy Tour</h1>
              <p>Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="{{ route('action', ['acao' => 'admin']) }}"><i class="icon-home"></i>Home</a></li>

            <li> <a href="{{ route('action', ['acao' => 'tabelas']) }}"> <i class="icon-grid"></i>Ver Banco Mídias </a></li>

            <li> <a href="{{ route('action', ['acao' => 'cadastrarMidia']) }}"> <i class="icon-padnote"></i>Cadastrar Mídias</a></li>
            <li> <a href="{{ route('action', ['acao' => 'login']) }}"> <i class="icon-interface-windows"></i>Sair</a></li>
          </ul>

        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">CRUD Mídias</h2>
            </div>
          </header>


          <!-- Conteúdo dinâmico-->
          <div class="container">

              @yield('conteudo')

          </div>


          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Easy Tour &copy; 2016-2017</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="#" class="external">#</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>


    <!-- Javascript files-->
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('asset/jsDashBoard/tether.min.js')}}"></script>
    <script src="{{asset('asset/jsDashBoard/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/jsDashBoard/jquery.cookie.js')}}"> </script>
    <script src="{{asset('asset/jsDashBoard/jquery.validate.min.js')}}"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{asset('asset/jsDashBoard/charts-home.js')}}"></script>
    <script src="{{asset('asset/jsDashBoard/front.js')}}"></script>

  </body>


</html>
