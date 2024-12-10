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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
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
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="correlativos.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Correlativos</span></a>
            </li>
            <!-- Nav Item - Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-chart-line"></i> <!-- Línea de gráfico -->
                    <span>Reportes</span></a>
            </li>
            <!-- Nav Item - Reportes y Permisos -->
            <li class="nav-item">
                <a class="nav-link" href="roles-permisos.html">
                    <i class="fas fa-user-shield"></i> <!-- Usuario con escudo -->
                    <span>Roles y Permisos</span></a>
            </li>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Información del Usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Victor Ramos</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            <!-- Menú desplegable - Información del Usuario-->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="mi-perfil.html">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mis Datos
                                </a>
                                <a class="dropdown-item" href="register.html">
                                    <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registrar Usuario
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 <!-- Begin Page Content -->
                <div class="container-fluid text-center" style="text-align: center; padding: 50px 280px;">
                    <!-- Módulo de Datos de Usuario -->
                    <h1 class="h3 mb-4 text-gray-800">Datos de Usuario</h1>

                </div>

                <x-app-layout>
                    <x-slot name="header">
                        <div class="flex justify-between items-center">
                            <!-- Botón rojo para redirigir al Dashboard -->
                            <a href="{{ route('dashboard') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Ir al Dashboard
                            </a>

                            <!-- Información del usuario (Nombre e imagen con dropdown activable por clic) -->
                            <div class="relative">
                                <button id="user-menu-toggle" class="flex items-center text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                                    <img class="h-10 w-10 rounded-full" src="{{ asset('backend/assets/img/undraw_profile.svg') }}" alt="User Avatar">
                                    <span class="ml-2 font-medium">{{ Auth::user()->name }}</span>
                                    <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>

                                <!-- Dropdown del usuario -->
                                <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-50">
                                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed"
                                        aria-disabled="true">
                                        Mis Datos
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                        Cambiar Contraseña
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                            Cerrar Sesión
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </x-slot>

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

                <!-- Scripts para el Dropdown -->
                <script>
                    document.getElementById('user-menu-toggle').addEventListener('click', function () {
                        const menu = document.getElementById('user-menu');
                        menu.classList.toggle('hidden');
                    });
                </script>



            <!-- Footer -->
            <footer class="sticky-footer bg-white">
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
