<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbAdmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        /* Styling for fixed header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            background-color: #00508D;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        /* Adjust content and sidebar for fixed header */
        #content-wrapper {
            margin-top: 70px; /* Push content below header */
            display: flex;
        }

        aside {
            width: 260px; /* Increase sidebar width */
            height: 100%;
            font-size: 14px;
            position: fixed;
            top: 70px; /* Sidebar starts below the header */
            left: 0;
            padding-left: 20px; /* Add padding to sidebar */
            padding-right: 20px;
        }

        .sidebar-divider {
            margin: 20px 0; /* Add margin for divider */
        }

        .nav-item {
            margin-bottom: 10px; 
        }

        .main-content {
            margin-left: 20px; /* Space for sidebar */
            margin-top: 20px; /* Space for sidebar */
            width: 100%;
            padding-top: 20px;
            padding-left: 20px; /* Add padding to main content */
        }

        .container-fluid {
            margin-top: 20px; /* Add margin at the top of the content */
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">

            <!-- Topbar (Header) -->
            @include('layouts.topbar')
            <!-- End of Topbar -->

            <!-- Main Content -->
            <div class="main-content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                    @yield('styles')
                    @yield('script')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{ asset('sbAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbAdmin/js/sb-admin-2.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
