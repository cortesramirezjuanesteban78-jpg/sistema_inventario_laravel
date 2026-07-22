<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/Favicon2.png')}}" type="image/x-icon">
    <title>Bienvenido</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  @yield('css')
</head>

<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span class="nav-link">{{ Auth::user()->name }}</span>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" style="display:inline; margin:0;">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link" style="cursor:pointer; color:inherit;">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
      </nav>
      
    <aside class="main-sidebar bg-white shadow-xl border-r border-gray-100 elevation-4 transition-all duration-300 min-h-screen">
        <div class="sidebar py-4">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column space-y-1" data-widget="treeview" role="menu"
                    data-accordion="false">
                    
                    <!-- Unidades Productivas -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link text-gray-700 hover:bg-agro-50 hover:text-agro-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                             <i class="fas fa-users text-agro-500 text-lg w-8 text-center"></i>
                            <p class="ml-2 flex-1">
                                Gestion Usuarios
                                <i class="fas fa-angle-left right text-sm"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4 mt-1 space-y-1">
                            <li class="nav-item">
                           <a href="{{ route('usuarios.create') }}"  class="nav-link text-gray-600 hover:text-agro-600 hover:bg-gray-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-user-plus text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Ingreso</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('usuarios.index') }}"  class="nav-link text-gray-600 hover:text-agro-600 hover:bg-gray-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-list text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Listas</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Proveedores -->
                    <li class="nav-item has-treeview mt-2">
                        <a href="#" class="nav-link text-gray-700 hover:bg-agro-50 hover:text-agro-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                         <i class="fas fa-truck text-agro-500 text-lg w-8 text-center"></i>
                            <p class="ml-2 flex-1">
                                Proveedores
                                <i class="fas fa-angle-left right text-sm"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4 mt-1 space-y-1">
                            <li class="nav-item">
                                <a href="" class="nav-link text-gray-600 hover:text-agro-600 hover:bg-gray-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-box text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Registro</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-gray-600 hover:text-agro-600 hover:bg-gray-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-tools text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Listado</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Roles Mayordomo -->
                    <li class="nav-item mt-2">
                        <a href="{{ asset('AdminLTE-3.2.0/pages/widgets.html') }}" class="nav-link text-gray-700 hover:bg-agro-50 hover:text-agro-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                            <i class="fas fa-user-shield text-agro-500 text-lg w-8 text-center"></i>
                            <p class="ml-2">Categorias</p>
                        </a>
                    </li>

                    <!-- Análisis de Producción -->
                    <li class="nav-item mt-2">
                        <a href="{{ asset('AdminLTE-3.2.0/pages/widgets.html') }}" class="nav-link text-gray-700 hover:bg-agro-50 hover:text-agro-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                            <i class="fas fa-chart-line text-agro-500 text-lg w-8 text-center"></i>
                            <p class="ml-2">Análisis de Producción</p>
                        </a>
                    </li>

                    <!-- Geo Referencias -->
                    <li class="nav-item mt-2">
                        <a href="#" class="nav-link text-gray-700 hover:bg-agro-50 hover:text-agro-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                            <i class="nav-icon fas fa-map-marked-alt text-agro-500 text-lg w-8 text-center"></i>
                            <p class="ml-2">Geo Referencias</p>
                        </a>
                    </li>

                    <!-- Reportes -->
                    <li class="nav-item has-treeview mt-2">
                        <a href="#" class="nav-link text-gray-700 hover:bg-red-50 hover:text-red-700 rounded-lg transition-colors font-medium flex items-center py-3 px-4">
                            <i class="nav-icon fas fa-file-pdf text-red-500 text-lg w-8 text-center"></i>
                            <p class="ml-2 flex-1">
                                Reportes
                                <i class="fas fa-angle-left right text-sm"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4 mt-1 space-y-1">
                            <li class="nav-item">
                                <a href="{{ asset('AdminLTE-3.2.0/pages/tables/simple.html') }}"
                                    class="nav-link text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-tasks text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Actividades</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset('AdminLTE-3.2.0/pages/tables/data.html') }}"
                                    class="nav-link text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-md transition-colors py-2 px-4 flex items-center">
                                    <i class="nav-icon fas fa-file-invoice-dollar text-sm w-6 text-center"></i>
                                    <p class="ml-2 text-sm">Contable</p>
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

    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE-3.2.0/dist/js/demo.js') }}"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

    @yield('js')
</body>

</html>