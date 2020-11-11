
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
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