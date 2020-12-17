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
    <div id="wrapper" style="font-size: 10pt;">

        <!-- Sidebar -->
        @if (Auth::user()->rol_id == 1)<!-- Administrador -->
          {{-- @include('menu') --}}
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15">
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
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-journal-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
              </svg></span>
              <span style="font-size: 10pt;">Registrar asignación de material de grupo</span></a>
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider">
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item" hidden><a href="#" class="nav-link">no ver</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-bar-graph-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 11.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
              </svg></span>
              <span style="font-size: 10pt;">Generar partes mensuales</span>
            </a>
            {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> + Docente</h6>
                <a class="collapse-item" href="cards.html">Añadir Docente</a>
                <a class="collapse-item" href="buttons.html">Ver Docentes</a>
                <a class="collapse-item" href="cards.html">Planilla Docente</a>
              </div>
            </div> --}}
          </li>
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('facultad') }}">
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2H5zm6 1H5v2H3v6h2v2h6v-2h2V5h-2V3zm1-2v3h3V1h-3zm3 11h-3v3h3v-3zM4 15v-3H1v3h3zM1 4h3V1H1v3z"/>
              </svg></span>
              <span style="font-size: 10pt;">Facultad</span>
            </a>
            {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> + Docente</h6>
                <a class="collapse-item" href="cards.html">Añadir Docente</a>
                <a class="collapse-item" href="buttons.html">Ver Docentes</a>
                <a class="collapse-item" href="cards.html">Planilla Docente</a>
              </div>
            </div> --}}
          </li>
          <hr class="sidebar-divider">
          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            {{-- <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities"> --}}
            <a class="nav-link" href="#">
            {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities"> --}}
              {{-- <i class="fas fa-fw fa-wrench"></i> --}}
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg></span>
              <span style="font-size: 10pt;">Reporte de seguimiento</span>
            </a>
            {{-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Auxiliares:</h6>
                <a class="collapse-item" href="utilities-color.html">Añadir Auxiliar</a>
                <a class="collapse-item" href="utilities-border.html">Ver Auxiliares</a>
                <a class="collapse-item" href="utilities-animation.html">Planilla Auxliar Docente</a>
                <a class="collapse-item" href="utilities-animation.html">Planilla Auxliar Laboratorio</a>
              </div>
            </div> --}}
          </li>
          <!-- Divider -->
          <hr class="sidebar-divider">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg></span>
              <span style="font-size: 10pt;">Reporte Semanal</span>
            </a>
          </li>
          <!-- Divider -->
          {{-- <hr class="sidebar-divider d-none d-md-block"> --}}
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-book-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg></span>
              <span style="font-size: 10pt;">Reporte Mensual</span>
            </a>
          </li>
    
        </ul>
        @endif
        @if (Auth::user()->rol_id == 2)<!-- Decano -->
            
        @endif
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
              @if (Auth::user()->rol_id != 1)
              <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logoBuildingSoft.png') }}" width="100" alt="">
              </a>
              @endif
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  {{-- <div class="container">
                    <img src="" width="10%" alt="">
                  </div> --}}
                  @if (Auth::user()->rol_id == 1)
                    <span><h4 class="mt-3">&nbsp;&nbsp;&nbsp;Administrador</span></h4>
                  @else
                  @if (Auth::user()->rol_id == 2)
                    <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Decano</span></h4>
                  @else
                  @if (Auth::user()->rol_id == 3)
                  <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Director de Departamento</span></h4>
                  @else
                  @if (Auth::user()->rol_id == 4)
                  <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Director Académico</span></h4>
                  @else
                  @if (Auth::user()->rol_id == 5)
                  <span><h4 class="m-3">|  &nbsp;&nbsp;&nbsp;Docente</span></h4>
                  
                  @else
                  @if (Auth::user()->rol_id == 6)
                  <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Aux. Docente</span></h4>
                  @else
                  @if (Auth::user()->rol_id == 7)
                  <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Aux. Laboratorio</span></h4>
                  @else
                  <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Este usuario no tiene un rol</span></h4>
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                </li>
                  <li class="nav-item">
                  @if (Auth::user()->rol_id == 1)
                    {{-- <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Administrador</span></h4> --}}
                  @else
                  @if (Auth::user()->rol_id == 2)
                    {{-- <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Decano</span></h4> --}}
                  @else
                  @if (Auth::user()->rol_id == 3)
                  {{-- <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Director de Departamento</span></h4> --}}
                  @else
                  @if (Auth::user()->rol_id == 4)
                  {{-- <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Director Académico</span></h4> --}}
                  @else
                  @if (Auth::user()->rol_id == 5)
                  <li class="nav-item mr-0">
                    <a class="nav-link btn btn-primary mr-2 ml-2" href="#">Validación por falta</a>
                  </li>
                  <li class="nav-item mr-0">
                    <a class="nav-link btn btn-primary mr-2 ml-2" href="#">Generar informe por departamento</a>
                  </li>
                  
                  @else
                  @if (Auth::user()->rol_id == 6 || Auth::user()->rol_id == 7 )
                  <li class="nav-item mr-0">
                    <a class="nav-link btn btn-primary mr-2 ml-2" href="#" style="font-size:10pt;">Validación por falta</a>
                  </li>
                  @else
                  @if (Auth::user()->rol_id == 7)
                  {{-- <span><h4 class="mt-3">|  &nbsp;&nbsp;&nbsp;Aux. Laboratorio</span></h4> --}}
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                  @endif
                </li>
                
              </ul>
              <ul class="navbar-nav ml-auto" style="font-size: 10pt;">
                @if (Auth::user()->rol_id == 1)<!---Administrador-->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-union" fill="currentColor" xmlns="http://  /2000/svg">
                      <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2z"/>
                    </svg>&nbsp;Habilitar Permiso</a>
                  </li>
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link" href="{{ url('facultad') }}" id="addUnidad" >
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>&nbsp;Registrar Unidad Academica</a>
                  </li>
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>&nbsp;Añadir Usuario</a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a style="font-size:10pt;" class="dropdown-item" href="{{ url('registeruser_ad') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
                          <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Registrar Administrativo
                      </a>
                      <a style="font-size:10pt;" class="dropdown-item" href="{{ url('registeruser_aca') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
                        </svg>
                        Registrar Academico
                      </a>
                    </div>
                  </li>
                @endif
                @if (Auth::user()->rol_id == 2)<!---Decano-->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;"> Reporte de seguimiento</span></a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Reporte Semanal
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Reporte Mensual
                    </a>
                  </div>
                </li>
                @endif
                @if (Auth::user()->rol_id == 3)<!---Director de Departamento-->
                    <li class="nav-item">
                    <a class="nav-link" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;"> Evento semanar</span></a>
                  </li>
                @endif
                @if (Auth::user()->rol_id == 4)<!---Director Académico-->
                    <li class="nav-item">
                    <a class="nav-link" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;"> Evento semanar</span></a>
                  </li>
                @endif
                @if (Auth::user()->rol_id == 5)<!---Docente-->
                    <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;">informe semanal</span></a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de informatica y sistemas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de matematicas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de electrica y electronica
                      </a>
                    </div>
                  </li>
                @endif
                @if (Auth::user()->rol_id == 6)<!---Aux Docente-->
                    <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;"> Registrar informe semanar</span></a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de informatica y sistemas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de matematicas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de electrica y electronica
                      </a>
                    </div>
                  </li>
                @endif
                @if (Auth::user()->rol_id == 7)<!---Aux Laboratorio-->
                    <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="addUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span style="font-size:10pt;"> Registrar informe semanar</span></a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de informatica y sistemas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de matematicas
                      </a>
                      <a class="dropdown-item" href="{{ url('/informes') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Dep. de electrica y electronica
                      </a>
                    </div>
                  </li>
                @endif
                
                <!-- Nav Item - User Information -->
              @if (Auth::guest())
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
              @else
                <li class="nav-item dropdown no-arrow" style="font-size:10pt;">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>&nbsp;
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="font-size: 10pt;">
                    <a class="dropdown-item" href="#">
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/><path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                      Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/logout') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                      </svg>
                        Cerrar Sesión
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