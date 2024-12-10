<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Envoltura de la página (contenido) -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistema Minitrámite</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard')}}">
                    <i class="fas fa-chart-line"></i> <!-- Línea de gráfico -->
                    <span>Reportes</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="correlativos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Correlativos</span></a>
            </li>
            <!-- Nav Item - Register User -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="fas fa-user-plus"></i> <!-- Icono de registrar usuario -->
                    <span>Registrar Nuevo Usuario</span>
                </a>
            </li>

            <!-- Nav Item - Reportes y Permisos -->
            <li class="nav-item">
                <a class="nav-link" href="roles-permisos.html">
                    <i class="fas fa-user-shield"></i> <!-- Usuario con escudo -->
                    <span>Roles y Permisos</span></a>
            </li>
            <!--Divisor -->
            <!--Divisor -->
            <hr class="sidebar-divider d-none d-md-block">
            <!--Encoger barra de navegación lateral(Sidebar) -->
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
                    <!--Prompt Buscar (Cambiarlo) -->
                    <!--<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                -->
                    <!-- Topbar Navbar -->
                     <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('backend/assets/img/undraw_profile.svg') }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Mis Datos
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <x-app-layout>
                        <div class="py-12 bg-gray-100">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                <div class="p-4 sm:p-8 bg-white dark:bg-gray shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white dark:bg-gray-0 shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white dark:bg-gray-0 shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-app-layout>
            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Modal de Cambiar Contraseña -->




</div>
 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('backend/assets/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="v{{asset('backend/assets/endor/jquery-easing/jquery.easing.min.js')}}"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{asset('backend/assets/js/sb-admin-2.min.js')}}"></script>

 <!-- Page level plugins -->
 <script src="{{asset('backend/assets/vendor/chart.js/Chart.min.js')}}"></script>

 <!-- Page level custom scripts -->
 <script src="{{asset('backend/assets/js/demo/chart-area-demo.js')}}"></script>
 <script src="{{asset('backend/assets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
