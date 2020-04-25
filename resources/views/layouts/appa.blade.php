<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEYD S.A.S</title>
    <link rel="icon" href="{{ asset('dist/img/logi.ico')}}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



     <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
        <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css')}}">

    <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- cdn Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    @yield('cssadi')


</head>
<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        @if (Route::has('login'))

            @auth

                    <!-- Navbar -->
                    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="https://www.somosenviosydiligencias.com/" target="_blank" class="nav-link">Web Somos Envíos y Diligencias</a>
                        </li>


                        </ul>




                        <!-- Right navbar links -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link disabled text-uppercase"  tabindex="-1" aria-disabled="true">nOMBRE DEL MODULO</a>
                            </li>
                        <!-- Messages Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge-danger "><small>3</small></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                            </div>
                        </li>
                        <!-- Notifications Dropdown Menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge-warning "><small>1</small></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                            </div>
                        </li>
                        <li class="nav-item">


                            <a class="nav-link" data-widget="control-sidebar" data-slide="true" role="button"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                           <i class="fas fa-sign-out-alt"></i>

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </li>
                        </ul>
                    </nav>
                    <!-- /.navbar -->

                     <!-- Main Sidebar Container -->
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <a href="index3.html" class="brand-link">
                        <img src="{{ asset('logos/900474371_logo.jpg')}}" alt="Nombre de la empresa" class="brand-image img-circle elevation-3"
                            style="opacity: .8">
                        <span class="brand-text font-weight-light">SEYD</span>
                        </a>

                        <!-- Sidebar -->
                        <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                            <img src="{{ asset('usuarios/79844910_abv.jpg')}}" class="img-circle elevation-2" alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="info">
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                    </a>
                                </li>
                                </ul>
                            </li>

                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                        </div>
                        <!-- /.sidebar -->
                    </aside>

            @else

                <div id="encab"></div>

            @endauth

        @endif


        <section className="content">
            @yield('content')
        </section>
        <!-- .content -->
    </div>
    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 - 2025 </a>.</strong>
        Todos los Derchos Reservados - <small>Adecuación plantilla AdminLTE.io</small>.
        <div class="float-right d-none d-sm-inline-block">
        <b>Versión</b> 2.0.0
        </div>
    </footer>




    <!-- REQUIRED SCRIPTS -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>


    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



    <!-- SCRIPTS BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- AdminLTE -->
    <script src="{{ asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('dist/js/demo.js')}}"></script>
    <script src="{{ asset('dist/js/pages/dashboard3.js')}}"></script>

    @yield('jsadicionales')

    @yield('scripts')


    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>



<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



</body>

</html>
