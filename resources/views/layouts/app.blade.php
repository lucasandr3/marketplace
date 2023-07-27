<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('painel/images/logo_venda.png')}}">
    <title>{{auth()->user()->name}}</title>
    <!-- This Page CSS -->
    @stack('styles')
    <link rel="stylesheet" type="text/css" href="{{url('painel/libs/select2/dist/css/select2.min.css')}}">
    <!-- Custom CSS -->
    <link href="{{url('painel/css/style.min.css')}}" rel="stylesheet">
    <link href="{{url('painel/css/custom.css')}}" rel="stylesheet">
    <link href="{{url('painel/css/filepond.min.css')}}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
{{--<div class="preloader">--}}
{{--    <div class="lds-ripple">--}}
{{--        <div class="lds-pos"></div>--}}
{{--        <div class="lds-pos"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        @include('sweetalert::alert')
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            @yield('breadcrumb')
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        @hasSection('content')
            <div class="container-fluid">
                <!-- Row -->
                @include('flash::message')
                @yield('content')
                <!-- Row -->
                <div id="backdropOffcanvas" class="fade" onclick="removeAndCloseBackdrop()"></div>
            </div>
        @endif

        @hasSection('content-no-container')
            @yield('content-no-container')
        @endif

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © {{\Carbon\Carbon::now()->format('Y')}} Licitanet
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{url('painel/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{url('painel/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{url('painel/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- apps -->
<script src="{{url('painel/js/app.min.js')}}"></script>
<script src="{{url('painel/js/app.init.js')}}"></script>
<script src="{{url('painel/js/app-style-switcher.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{url('painel/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{url('painel/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('painel/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{url('painel/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{url('painel/js/custom.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{url('painel/js/pages/dashboards/dashboard1.js')}}"></script>

<script src="{{url('painel/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{url('painel/libs/inputmask/dist/inputmask/inputmask.extensions.js')}}"></script>
<script src="{{url('painel/libs/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}"></script>
<script src="{{url('painel/libs/inputmask/dist/inputmask/inputmask.date.extensions.js')}}"></script>
<script src="{{url('painel/libs/inputmask/dist/inputmask/jquery.inputmask.js')}}"></script>
<script src="{{url('painel/libs/inputmask/dist/inputmask/inputmask.extensions.js')}}"></script>
<script src="{{url('painel/js/pages/forms/mask/mask.init.js')}}"></script>

<script src="{{url('painel/libs/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{url('painel/libs/select2/dist/js/select2.min.js')}}"></script>
<script src="{{url('painel/js/pages/forms/select2/select2.init.js')}}"></script>
<script src="{{url('painel/js/filepond.js')}}"></script>
<script type="module" src="{{url('painel/js/uploadFile.js')}}"></script>

<script>
    function toggleMenuOffcanvas() {
        let menu = document.querySelector('.offcanvas-menu');
        let backdrop = document.querySelector('#backdropOffcanvas');

        if (menu.style.right === '0px') {
            menu.style.right = '-500px';
            backdrop.classList.remove('offcanvas-backdrop', 'show')
        } else {
            backdrop.classList.add('offcanvas-backdrop', 'show')
            menu.style.right = 0;
        }
    }

    function removeAndCloseBackdrop() {
        let menu = document.querySelector('.offcanvas-menu');
        let backdrop = document.querySelector('#backdropOffcanvas');
        backdrop.classList.remove('offcanvas-backdrop', 'show')
        menu.style.right = '-500px';
    }
</script>

@stack('scripts')
</body>

</html>
