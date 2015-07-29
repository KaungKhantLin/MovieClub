<html>
<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <!-- Bootstrap 3.3.4 -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->


  <!-- Theme style -->
  <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('dist/css/font.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />


    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />

      </head>


      <body class="skin-blue sidebar-mini">
        <div class="wrapper">

          <header class="main-header">
            <!-- Logo -->
            <div class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>M</b>C</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Movie</b>Club</span>
            </div>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">

                    <a href="{{ url('/auth/logout') }}"> <img src="{{ asset('dist/img/kkl.jpg') }}" class="user-image" alt="User Image"/>
                      <span class="hidden-xs">Logout</span></a>

                  </li>

                </ul>
              </div>
            </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="{{ asset('dist/img/kkl.jpg') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                  <p>Create Movie</p>

                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>




            </section>
            <!-- /.sidebar -->
          </aside>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                MovieClub
                <small>Movie Create Room.</small>
              </h1>

            </section>

            <!-- Main content -->
            <section class="content">


              @yield('theraters_create')


            </section><!-- /.content -->
          </div><!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>This site is create by PROWAY Creative Team.</b>
            </div>
            <strong>ThemesCopyright &copy; 2014-2015 / Almsaeed Studio.</strong>

          </footer>


    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>


    <script src="{{ asset('dist/js/app.min.js') }}" type="text/javascript"></script>

    @yield('content')
    @yield('script')
  </body>
  </html>