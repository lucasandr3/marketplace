<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Venda Mais</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{url('assets/images/logo_venda.png')}}"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="{{url('assets/site/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/site/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{url('assets/site/css/animate.css')}}" />
    <link rel="stylesheet" href="{{url('assets/site/css/main.css')}}" />
</head>
<body>
<!-- ======== preloader start ======== -->
<div class="preloader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

<!-- ======== header start ======== -->
<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand d-flex align-items-center" href="{{route('landing')}}" style="gap:10px;">
                            <img src="{{url('assets/images/logo_venda.png')}}" alt="Logo" width="40px"/>
                            <span id="title-company" class="text-light">Venda Mais</span>
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div
                            class="collapse navbar-collapse sub-menu-bar"
                            id="navbarSupportedContent"
                        >
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#home">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">Sobre</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#why">Funcionalidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#pricing">Preços</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('login')}}" target="_blank">
                                        Área do Cliente <i class="lni lni-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->
</header>
<!-- ======== header end ======== -->

<!-- ======== hero-section start ======== -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".4s">
                        Aumente a eficiência do seu negócio
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Gerencie sua empresa com eficiência com o nosso sistema de gestão
                    </p>
                    <a
                        href="#pricing"
                        class="main-btn border-btn btn-hover wow fadeInUp"
                        data-wow-delay=".6s"
                    >Assine Agora</a
                    >
                    <a href="#features" class="scroll-bottom">
                        <i class="lni lni-arrow-down"></i
                        ></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                    <img src="{{url('assets/site/img/hero/hero-img.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== hero-section end ======== -->

<!-- ======== feature-section start ======== -->
{{--<section id="features" class="feature-section pt-120">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-4 col-md-8 col-sm-10">--}}
{{--                <div class="single-feature">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="lni lni-bootstrap"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3>Bootstrap 5</h3>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed--}}
{{--                            diam nonumy eirmod tempor invidunt ut labore--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-8 col-sm-10">--}}
{{--                <div class="single-feature">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="lni lni-layout"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3>Clean Design</h3>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed--}}
{{--                            diam nonumy eirmod tempor invidunt ut labore--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-8 col-sm-10">--}}
{{--                <div class="single-feature">--}}
{{--                    <div class="icon">--}}
{{--                        <i class="lni lni-coffee-cup"></i>--}}
{{--                    </div>--}}
{{--                    <div class="content">--}}
{{--                        <h3>Easy to Use</h3>--}}
{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed--}}
{{--                            diam nonumy eirmod tempor invidunt ut labore--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ======== feature-section end ======== -->

<!-- ======== about-section start ======== -->
<section id="about" class="about-section pt-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-img">
                    <img src="{{url('assets/site/img/about/about-1.png')}}" alt="" class="w-100" />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content">
                    <div class="section-title mb-30">
                        <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                            Aumente a eficiência do seu negócio
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Nosso sistema de gestão é a solução perfeita para empresas
                            que desejam aumentar a eficiência e produtividade de suas operações.
                            Com recursos poderosos como controle financeiro, gerenciamento de estoque,
                            automação de processos e muito mais,
                            nosso sistema de gestão é o parceiro perfeito para o
                            sucesso do seu negócio.
                        </p>
                    </div>
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="main-btn btn-hover border-btn wow fadeInUp"--}}
{{--                        data-wow-delay=".6s"--}}
{{--                    >Discover More</a--}}
{{--                    >--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== about-section end ======== -->

<!-- ======== about2-section start ======== -->
<section id="about" class="about-section pt-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about-content">
                    <div class="section-title mb-30">
                        <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                            Fácil de usar
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Oferecemos vários pacotes de preços para atender às necessidades
                            de qualquer empresa, desde pequenos negócios até grandes corporações.
                            Todos os pacotes incluem suporte ao cliente 24 horas por dia, 7 dias por semana.
                        </p>
                    </div>
                    <ul>
                        <li>Acesso rápido</li>
                        <li>Fácil de Gerenciar</li>
                        <li>Suporte 24/7</li>
                    </ul>
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="main-btn btn-hover border-btn wow fadeInUp"--}}
{{--                        data-wow-delay=".6s"--}}
{{--                    >Assinar Agora</a--}}
{{--                    >--}}
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 order-first order-lg-last">
                <div class="about-img-2">
                    <img src="{{url('assets/site/img/about/about-2.png')}}" alt="" class="w-100" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== about2-section end ======== -->

<!-- ======== feature-section start ======== -->
<section id="why" class="feature-extended-section pt-50">
    <div class="feature-extended-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
                    <div class="section-title text-center mb-60">
                        <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                            Por que Nos Escolher
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Recursos e benefícios
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-extended">
                        <div class="icon">
                            <i class="lni lni-bar-chart"></i>
                        </div>
                        <div class="content">
                            <h3>Controle financeiro</h3>
                            <p>
                                Acompanhe suas finanças em tempo real, com
                                informações claras e precisas sobre receitas, despesas, fluxo de caixa e muito mais.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-extended">
                        <div class="icon">
                            <i class="lni lni-arrows-horizontal"></i>
                        </div>
                        <div class="content">
                            <h3>Gerenciamento de estoque</h3>
                            <p>
                                Gerencie seu estoque de forma eficiente,
                                com informações precisas sobre a quantidade de produtos, custos e vendas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-extended">
                        <div class="icon">
                            <i class="lni lni-grid-alt"></i>
                        </div>
                        <div class="content">
                            <h3>Automação de processos</h3>
                            <p>
                                Automatize processos repetitivos e economize
                                tempo e recursos, aumentando a eficiência da sua equipe.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-extended">
                        <div class="icon">
                            <i class="lni lni-files"></i>
                        </div>
                        <div class="content">
                            <h3>Geração de relatórios</h3>
                            <p>
                                Acesse relatórios detalhados sobre finanças, estoque,
                                vendas e muito mais, ajudando você a tomar decisões informadas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-extended">
                        <div class="icon">
                            <i class="lni lni-check-box"></i>
                        </div>
                        <div class="content">
                            <h3>Personalização do sistema</h3>
                            <p>
                                Adapte o sistema às necessidades específicas do seu negócio,
                                com módulos adicionais e personalização de recursos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== feature-section end ======== -->

<!-- ======== pricing-section start ======== -->
<section id="pricing" class="pricing-section pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
                <div class="section-title text-center mb-35">
                    <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        Pacotes de preços
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        Oferecemos vários pacotes de preços para atender às necessidades de qualquer empresa, desde pequenos negócios até grandes corporações.
                    </p>
                </div>
            </div>
        </div>
        <div class="pricing-nav-wrapper mb-60">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li role="presentation">
                    <a class="active" id="pills-month-tab" data-bs-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="true">Mensal</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                <div class="row justify-content-center">
                    @foreach($plans as $plan)
                    <div class="col-lg-4 col-md-8 col-sm-10">
                        <div class="single-pricing @if($plan->recomended) border-1 @endif">
                            <div class="pricing-header">
                                <h1 class="price">R$ {{number_format($plan->price, 2, ',', '.')}}</h1>
                                <h3 class="package-name">{{$plan->name}}</h3>
                                <p class="mt-2">{{$plan->description}}</p>
{{--                                @if($plan->recomended) <span class="badge bg-primary">Recomendado</span> @endif--}}
                            </div>
                            <div class="content">
                                <ul>
                                    @foreach($plan->details as $details)
                                    <li>
                                        <i class="lni lni-checkmark active"></i> {{$details->description}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a href="{{route('plan.subscription', $plan->url)}}" class="main-btn btn-hover btn-sale @if(!$plan->recomended) bg-white border-1 text-muted @endif">Assinar</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== pricing-section end ======== -->


<!-- ======== subscribe-section start ======== -->
<section id="contact" class="subscribe-section pt-50">
    <div class="container-fluid">
        <div class="subscribe-wrapper img-bg">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title mb-15">
                        <h2 class="text-white mb-25">Experimente Agora</h2>
                        <p class="text-white pr-5">
                            Experimente nosso sistema web de gerenciamento de projetos hoje mesmo e comece a simplificar sua vida.
                            Inscreva-se agora para uma avaliação gratuita de 7 dias!
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form action="#" class="subscribe-form">
                        <input
                            type="email"
                            name="subs-email"
                            id="subs-email"
                            placeholder="E-mail da sua empresa"
                        />
                        <button type="submit" class="main-btn btn-hover">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======== subscribe-section end ======== -->

<!-- ======== footer start ======== -->
<footer class="footer">
    <div class="container">
        <div class="widget-wrapper">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="logo mb-30">
                            <a href="{{route('landing')}}" class="d-flex align-items-center" style="gap: 10px;">
                                <img src="{{url('assets/images/logo_venda.png')}}" alt="Logo" width="40px"/>
                                <span class="text-light" style="font-size: 20px;">Venda Mais</span>
                            </a>
                        </div>
                        <p class="desc mb-30 text-white">
                            Aumente a eficiência do seu Negócio
                        </p>
{{--                        <ul class="socials">--}}
{{--                            <li>--}}
{{--                                <a href="jvascript:void(0)">--}}
{{--                                    <i class="lni lni-facebook-filled"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="jvascript:void(0)">--}}
{{--                                    <i class="lni lni-twitter-filled"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="jvascript:void(0)">--}}
{{--                                    <i class="lni lni-instagram-filled"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="jvascript:void(0)">--}}
{{--                                    <i class="lni lni-linkedin-original"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h3>Links</h3>
                        <ul class="links">
                            <li><a href="#home">Início</a></li>
                            <li><a href="#why">Funcionalidade</a></li>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#pricing">Preços</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Institucional</h3>
                        <ul class="links">
                            <li><a href="javascript:void(0)">Política de Privacidade</a></li>
                            <li><a href="javascript:void(0)">Termos de serviço</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Área do Cliente</h3>
                        <ul class="links">
                            <li><a href="{{route('login')}}">Entrar no Sistema <i class="lni lni-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ======== footer end ======== -->

<!-- ======== scroll-top ======== -->
<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ======== JS here ======== -->
<script src="{{url('assets/site/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/site/js/wow.min.js')}}"></script>
<script src="{{url('assets/site/js/main.js')}}"></script>
</body>
</html>
