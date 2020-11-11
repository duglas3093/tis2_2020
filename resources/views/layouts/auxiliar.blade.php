<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'title_page')</title>
     <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>
<body>
    {{-- <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                Collapsed Hamburger
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                Branding Image
                <a class="navbar-brand" href="{{ url('/') }}">
                    Control Docente
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                Left Side Of Navbar
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                </ul>

                Right Side Of Navbar
                <ul class="nav navbar-nav navbar-right">
                    Authentication Links
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> --}}
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
              {{-- <i class="fas fa-laugh-wink"></i> --}}
            </div>
            <div class="sidebar-brand-text mx-3">
              <img src="{{ asset('images/logoBuildingSoft.png') }}" width="100%" alt="">
            </div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">
    
          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="#">
              {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
              <span>Tablero</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Usuarios
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              {{-- <i class="fas fa-fw fa-cog"></i> --}}
              <span>Docente</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> + Docente</h6>
                <a class="collapse-item" href="cards.html">Añadir Docente</a>
                <a class="collapse-item" href="buttons.html">Ver Docentes</a>
                <a class="collapse-item" href="cards.html">Planilla Docente</a>
              </div>
            </div>
          </li>
    
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              {{-- <i class="fas fa-fw fa-wrench"></i> --}}
              <span>Auxiliares</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Auxiliares:</h6>
                <a class="collapse-item" href="utilities-color.html">Añadir Auxiliar</a>
                <a class="collapse-item" href="utilities-border.html">Ver Auxiliares</a>
                <a class="collapse-item" href="utilities-animation.html">Planilla Auxliar Docente</a>
                <a class="collapse-item" href="utilities-animation.html">Planilla Auxliar Laboratorio</a>
                {{-- <a class="collapse-item" href="utilities-other.html">Other</a> --}}
              </div>
            </div>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Complementos
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              {{-- <i class="fas fa-fw fa-folder"></i> --}}
              <span>Planillas</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">PLANILLAS</h6>
                <a class="collapse-item" href="login.html">Docente</a>
                <a class="collapse-item" href="register.html">Auxliar Docente</a>
                <a class="collapse-item" href="forgot-password.html">Auxiliar Laboratorio</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Otros</h6>
                <a class="collapse-item" href="404.html">Permisos</a>
                {{-- <a class="collapse-item" href="blank.html"></a> --}}
              </div>
            </div>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
    
          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
    
        </ul>
        <!-- End of Sidebar -->
    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
    
          <!-- Main Content -->
          <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                {{-- <i class="fa fa-bars"></i> --}}
              </button>
    
              <!-- Topbar Navbar -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <h4>
                    @if (Auth::user()->rol_id == 1)
                      Administrador
                    @else
                        @if (Auth::user()->rol_id == 2)
                          Decano
                        @else
                            @if (Auth::user()->rol_id == 3)
                            Director de Departamento
                            @else
                                @if (Auth::user()->rol_id == 4)
                                Director Académico
                                @else
                                    @if (Auth::user()->rol_id ==5)
                                    Docente
                                    @else
                                        @if (Auth::user()->rol_id == 6)
                                        Aux. Docente
                                        @else
                                            @if (Auth::user()->rol_id == 7)
                                            Aux. Laboratorio
                                            @else
                                            Este usuario no tiene un rol
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @endif
                        @endif
                    @endif
                    {{-- @switch(Auth::user()->rol_id)
                        @case(1):
                            
                            @break
                        @case(2):
                            Decano      
                            @break
                        @case(3):
                            
                            @break
                        @case(4):
                            
                            @break
                        @case(5):
                            
                            @break
                        @case(6):
                            
                            @break
                        @case(7):
                            
                            @break
                        @default:
                            
                    @endswitch --}}
                  </h4>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
    
                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                  <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <!-- Dropdown - Messages -->
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            {{-- <i class="fas fa-search fa-sm"></i> --}}
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-union" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2z"/>
                  </svg>Habilitar Permiso</a>
                </li>
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>Registrar Unidad Academica</a>
                </li>
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg>Añadir Usuario</a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ url('registeruser_ad') }}">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Registrar Usuario Administrativo
                    </a>
                    <a class="dropdown-item" href="{{ url('registeruser_aca') }}">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Registrar Usuario Academico
                    </a>
                  </div>
                </li>
    
                <!-- Nav Item - User Information -->
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
              @else
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/logout') }}">
                        <i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión
                      </a>
                    </div>
                </li>
              @endif
              </ul>
    
            </nav>
            <!-- End of Topbar -->
    
            <!-- Begin Page Content -->
            <div class="container-fluid">

              @yield('content')
                

            </div>

    
    
                  
            <!-- /.container-fluid -->
    
          </div>
          <!-- End of Main Content -->
    
          <!-- Footer -->
          <footer class="sticky-footer bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright tis 2 - 2020</span>
              </div>
            </div>
          </footer>
          <!-- End of Footer -->
    
        </div>
        <!-- End of Content Wrapper -->
    
    </div>


    

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>