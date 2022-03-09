<!--
  Name: Dosemedchart
  Version: 1.0
  Author: Carlos Queiroz e Pedro Piedade
  Website: http://dosemedchart.com.br
  Support: http://dosemedchart.com.br
 
-->
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dosemedchart -  Gestão em Radioterapia</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>



  <link rel="icon" type="image/png" href="{{ asset('assets/_con/images/icon.png') }}">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/nanoScroller/nanoscroller.css') }}" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/material-design-icons/css/material-design-icons.min.css') }}" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/ionicons/css/ionicons.min.css') }}" />
  <!-- Dropzone -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/dropzone/dropzone.min.css') }}" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/weatherIcons/css/weather-icons.min.css') }}" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/_con/css/_con.min.css') }}" />
  <!-- FIle Upload -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/jQuery-File-Upload/uploadfile.css') }}" />
 

  <!--[if lt IE 9]>
    <script src="{{ asset('assets/html5shiv/html5shiv.min.js') }}"></script>
  <![endif]-->

    @stack('header.style')
</head>

<body class="yay-hide">

  <nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="#!" class="brand-logo">
     
      </a>
      <!-- /Logo -->

      <!-- Menu -->
       
  
     
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->

        <a href="#!" class="brand-logo">
          <img src="{{ asset('assets/_con/images/logo-white.png') }}" alt="Con">
        </a>
        <!-- /Logo -->
      </div>
    </div>

   <!-- Yay Sidebar-->
    <div class="nano">
    
      <div class="nano-content" tabindex="0" style="right: -17px;">
       
       

      </div>


      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->


  <!-- Main Content -->
  <section class="content-wrap">
  


    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
        
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">

          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>

        </div>
      </div>

    </div>
    <!-- /Breadcrumb -->


    <!-- Content -->
    
      @yield('content')
    
    <!-- /Content  -->
  </section>
  <!-- /Main Content -->

  <!-- Search Bar -->
  <div class="search-bar">
    <div class="layer-overlay"></div>
    <div class="layer-content">
      <form action="#!">
        <!-- Header -->
        <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

        <!-- Search Input -->
        <div class="input-field">
          <i class="mdi-action-search prefix"></i>
          <input type="text" name="con-search" placeholder="Search...">
        </div>

        <!-- Search Results -->
        <div class="search-results">

          <div class="row">
           

          </div>

        </div>

      </form>
    </div>
  </div>
  <!-- /Search Bar -->

 



  <footer>&copy; 2016 <strong>ScanSafe</strong>. Todos os Direitos Reservados. 
  </footer>
  <!-- DEMO [REMOVE IT ON PRODUCTION] 
  <script type="text/javascript" src="{{ asset('assets/_con/js/_demo.js') }}"></script>
-->
  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="{{ asset('assets/jqueryRAF/jquery.requestAnimationFrame.min.js') }}"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="{{ asset('assets/nanoScroller/jquery.nanoscroller.min.js') }}"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

 <!-- Data Tables -->
  <script type="text/javascript" src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/dataTables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/dataTables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
  
  <!-- Sortable -->
  <script type="text/javascript" src="{{ asset('assets/sortable/Sortable.min.js') }}"></script>

  <!-- Dropzone -->
  <script type="text/javascript" src="{{ asset('assets/dropzone/dropzone.min.js') }}"></script>

  <!-- TinyMCE -->
  <script type="text/javascript" src="{{ asset('assets/tinymce/js/tinymce.min.js') }}"></script>

  <!-- Main -->
  <script type="text/javascript" src="{{ asset('assets/_con/js/_con.min.js') }}"></script>

   <!-- Data Tables
  <script type="text/javascript" src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/dataTables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/dataTables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
    -->
  <!-- FIle Upload -->
  <script type="text/javascript" src="{{ asset('assets/jQuery-File-Upload/jquery.uploadfile.js') }}"></script>


  @stack('footer.script')
</body>

</html>