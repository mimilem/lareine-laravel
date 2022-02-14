<!DOCTYPE html>
<html lang="en">
<head>
   <title>La Souveraine | Dashboard</title>
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
   <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/themify-icons/themify-icons.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/icofont/css/icofont.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/icon/simple-line-icons/css/simple-line-icons.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/svg-weather.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/main.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">

</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="#" class="logo"><img class="img-fluid able-logo" src="{{ asset('assets/img/logo-white.png') }}" alt="La Souveraine Logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
           
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
               <ul class="top-nav">
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <li class="dropdown">
                     <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{ asset('admin/assets/images/avatar-1.png') }}" style="width:40px;" alt="User Image"></span>
                        <span>Admin <i class=" icofont icofont-simple-down"></i></span>

                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <li><a href="{{ route('logout') }}"><i class="icon-logout"></i> Deconnexion</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
               <li><a href="#"><i class="ti-dashboard text-custom"></i><span> Dashboard</span></a> </li>
               <li><a href="#"><i class="ti-blackboard text-custom"></i><span> Formations</span></a> </li>
               <li><a href="#"><i class="ti-user text-custom"></i><span> Falicitateurs</span></a> </li>
               <li><a href="#"><i class="ti-view-list text-custom"></i><span> Réservations</span></a> </li>
            </ul>
         </section>
      </aside>
      <div class="content-wrapper">
        @yield('content')
      </div>
   </div>
   <script src="{{ asset('admin/plugins/Jquery/dist/jquery.min.js') }}"></script>
   <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <script src="{{ asset('admin/plugins/tether/dist/js/tether.min.js') }}"></script>
   <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('admin/assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>
   <script src="{{ asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
   <script src="{{ asset('admin/assets/plugins/countdown/js/jquery.counterup.js') }}"></script>
   <script src="{{ asset('admin/assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>
   <script src="{{ asset('admin/assets/js/main.min.js') }}" type="text/javascript" ></script>
   <script src="{{ asset('admin/assets/pages/elements.js') }}" type="text/javascript"></script>
   <script src="{{ asset('admin/assets/js/menu.min.js') }}"></script>
   @yield('scripts')
</body>
</html>
