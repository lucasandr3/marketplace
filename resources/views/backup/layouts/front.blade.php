<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Markteplace</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--=====================================
    Marcado OPEN GRAPH FACEBOOK
    ======================================-->

    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="Type">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!--=====================================
    Marcado TWITTER
    ======================================-->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@marketplace">
    <meta name="twitter:creator" content="@marketplace">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:image:width" content="800">
    <meta name="twitter:image:height" content="418">
    <meta name="twitter:image:alt" content="">

    <!--=====================================
    Marcado GOOGLE
    ======================================-->

    <meta itemprop="name" content="">
    <meta itemprop="url" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">


    <base href="views/">

    <link rel="icon" href="{{asset('assets/img/template/icono.png')}}">

    <!--=====================================
    CSS
    ======================================-->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.min.css')}}">

    <!-- linear icons -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/linearIcons.css')}}">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/owl.carousel.css')}}">

    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css')}}">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}">

    <!-- Font Awesome Start -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome-stars.css')}}">

    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/jquery-ui.min.css')}}">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/select2.min.css')}}">

    <!-- Scroll Up -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/scrollUp.css')}}">

    <!-- DataTable -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/responsive.bootstrap.datatable.min.css')}}">

    <!-- Placeholder-loading -->
    <!-- https://github.com/zalog/placeholder-loading -->
    <!-- https://www.youtube.com/watch?v=JU_sklV_diY -->
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading@0.2.6/dist/css/placeholder-loading.min.css">

    <!-- Notie Alert -->
    <link rel="stylesheet" href="{{asset('asset/css/plugins/notie.min.css')}}">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- tags Input -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/tagsinput.css')}}">

    <!-- Dropzone -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

    <!-- estilo principal -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Market Place 4 -->
    <link rel="stylesheet" href="{{asset('assets/css/market-place-4.css')}}">

    <!--=====================================
    PLUGINS JS
    ======================================-->

    <!-- jQuery library -->
    <script src="{{asset('assets/js/plugins/jquery-1.12.4.min.js')}}"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>

    <!-- Images Loaded -->
    <script src="{{asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>

    <!-- Masonry -->
    <script src="{{asset('assets/js/plugins/masonry.pkgd.min.js')}}"></script>

    <!-- Isotope -->
    <script src="{{asset('assets/js/plugins/isotope.pkgd.min.js')}}"></script>

    <!-- jQuery Match Height -->
    <script src="{{asset('assets/js/plugins/jquery.matchHeight-min.js')}}"></script>

    <!-- Slick -->
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>

    <!-- jQuery Barrating -->
    <script src="{{asset('assets/js/plugins/jquery.barrating.min.js')}}"></script>

    <!-- Slick Animation -->
    <script src="{{asset('assets/js/plugins/slick-animation.min.js')}}"></script>

    <!-- Light Gallery -->
    <script src="{{asset('assets/js/plugins/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/lg-thumbnail.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/lg-fullscreen.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/lg-pager.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>

    <!-- Sticky Sidebar -->
    <script src="{{asset('assets/js/plugins/sticky-sidebar.min.js')}}"></script>

    <!-- Slim Scroll -->
    <script src="{{asset('assets/js/plugins/jquery.slimscroll.min.js')}}"></script>

    <!-- Select 2 -->
    <script src="{{asset('assets/js/plugins/select2.full.min.js')}}"></script>

    <!-- Scroll Up -->
    <script src="{{asset('assets/js/plugins/scrollUP.js')}}"></script>

    <!-- DataTable -->
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dataTables.responsive.min.js')}}"></script>

    <!-- Chart -->
    <script src="{{asset('assets/js/plugins/Chart.min.js')}}"></script>

    <!-- pagination -->
    <!-- http://josecebe.github.io/twbs-pagination/ -->
    <script src="{{asset('assets/js/plugins/twbs-pagination.min.js')}}"></script>

    <!-- md5 -->
    <script src="{{asset('assets/js/plugins/md5.min.js')}}"></script>

    <!-- Notie Alert -->
    <!-- https://jaredreich.com/notie/ -->
    <!-- https://github.com/jaredreich/notie -->
    <script src="https://unpkg.com/notie@4.3.1/dist/notie.min.js"></script>

    <!-- Sweet Alert -->
    <!-- https://sweetalert2.github.io/ -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- PayPal -->
    <!-- https://developer.paypal.com/docs/checkout/ -->
    <script src="https://www.paypal.com/sdk/js?client-id=[YOUR API KEY]"></script>


    <!-- Mercado Pago -->
    <!-- https://www.mercadopago.com.co/developers/es/guides/online-payments/checkout-api/v2/receiving-payment-by-card -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <!-- summernote -->
    <!-- https://summernote.org/getting-started/#run-summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Tags Input -->
    <!-- https://www.jqueryscript.net/form/Bootstrap-4-Tag-Input-Plugin-jQuery.html -->
    <script src="{{asset('assets/js/plugins/tagsinput.js')}}"></script>

    <!-- Dropzone -->
    <!-- https://www.dropzonejs.com/ -->
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <!-- Shape Share -->
    <!-- https://www.jqueryscript.net/social-media/Social-Share-Plugin-jQuery-Open-Graph-Shape-Share.html -->
    <script src="{{asset('assets/js/plugins/shape.share.js')}}"></script>

    <script src="{{asset('assets/js/head.js')}}"></script>

</head>

<body>

<!--=====================================
Traductor Yandex
======================================-->

<div id="ytWidget" style="display:none"></div>

<script
    src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false"
    type="text/javascript"></script>


<!--=====================================
Header Promotion
======================================-->

@include('layouts.top-banner')

<!--=====================================
    Header
    ======================================-->

@include('layouts.header')

<!--=====================================
    Header Mobile
    ======================================-->


<!--=====================================
Pages
======================================-->

@yield('content')

<!--=====================================
	Newletter
	======================================-->

@include('layouts.newletter')

<!--=====================================
	Footer
	======================================-->

@include('layouts.footer')

<!--=====================================
	JS PERSONALIZADO
	======================================-->

<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
