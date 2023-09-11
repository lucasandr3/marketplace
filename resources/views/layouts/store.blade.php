<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <title>Super App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.structure.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.theme.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/owl-carrousel.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/owl-transitions.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="{{url('assets/images/search.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<nav class="navbar topnav">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{route('home')}}">Início</a></li>
            <li><a href="#"><i class="fa fa-message"></i> Suporte</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            {{--            <li class="dropdown">--}}
            {{--                <a class="dropdown-toggle" data-toggle="dropdown" href="#">English--}}
            {{--                    <span class="caret"></span></a>--}}
            {{--                <ul class="dropdown-menu">--}}
            {{--                    <li><a href="#">English</a></li>--}}
            {{--                    <li><a href="#">Português</a></li>--}}
            {{--                    <li><a href="#">Espanhol</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            <li><a href=""><i class="fa fa-sign-in"></i> Entrar</a></li>
        </ul>
    </div>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 logo">
                <a href="{{route('home')}}">
                    Super App
                    {{--                    <img src="{{url('assets/images/logo.png')}}" />--}}
                </a>
            </div>
            <div class="col-sm-8">
                {{--                <div class="head_help">(11) 9999-9999</div>--}}
                {{--                <div class="head_email">contato@<span>loja2.com.br</span></div>--}}

                <div class="search_area">
                    <form method="GET">
                        <input type="text" name="s" required placeholder="Pesquisar..."/>
                        <select name="category">
                            <option value="">Categoria</option>
                            <option value="">Departamento</option>
                            <option value="">Divisão</option>
                            <option value="">Processo</option>
                            <option value="">Fornecedor</option>
                        </select>
                        <input type="submit" value=""/>
                    </form>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="{{route('cart')}}">
                    <div class="cartarea">
                        <div class="carticon">
                            @if(session()->has('cart'))
                                <div class="cartqt">{{count(session()->get('cart'))}}</div>
                            @else
                                <div class="cartqt">0</div>
                            @endif
                        </div>
                        <div class="carttotal">
                            Seu Carrinho:<br/>
                            @if(session()->has('cart'))
                                <span>R$ {{number_format(session()->get('cart')[0]['total'], 2 ,',', '.')}}</span>
                            @else
                                <span>R$ 0,00</span>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
<div class="categoryarea">
    <nav class="navbar">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Selecione Uma Categoria
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <x-categories-home :categories="$categories"></x-categories-home>
                        </ul>
                </li>
                <x-breadcrumb-category :filter="$category_filter"></x-breadcrumb-category>
            </ul>
        </div>
    </nav>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <aside>
                    <h1>Filtros</h1>
                    <div class="filterarea">

                        <div class="filterbox">
                            <div class="filtertitle">Marcas</div>
                            <div class="filtercontent">
                                @foreach($brands as $brand)
                                    <div class="filteritem">
                                        <input type="checkbox" name="filter[brand][]" value="{{$brand->id}}"
                                               id="filter_brand{{$brand->id}}"/>
                                        <label for="filter_brand{{$brand->id}}">{{$brand->name_brand}}</label><span
                                            style="float:right">({{rand(0,100)}})</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="filterbox">
                            <div class="filtertitle">Preço</div>
                            <div class="filtercontent">
                                <input type="hidden" id="slider0" name="filter[slider0]" value="0"/>
                                <input type="hidden" id="slider1" name="filter[slider1]" value="1297"/>
                                <input type="text" class="filter-price" id="amount" readonly>
                                <div id="slider-range"></div>
                            </div>
                        </div>

                        <div class="filterbox">
                            <div class="filtertitle">Estrelas</div>
                            <div class="filtercontent">
                                {{--                                <div class="filteritem">--}}
                                {{--                                    <input type="checkbox" name="filter[star][]" value="0" id="filter_star0" />--}}
                                {{--                                    <label for="filter_star0">--}}
                                {{--                                        (sem estrelas)--}}
                                {{--                                    </label>--}}
                                {{--                                    <span style="float:right">(0)</span>--}}
                                {{--                                </div>--}}
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[star][]" value="1" id="filter_star1"/>
                                    <label for="filter_star1">
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                    </label>
                                    <span style="float:right">(1)</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[star][]" value="2" id="filter_star2"/>
                                    <label for="filter_star2">
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                    </label>
                                    <span style="float:right">(2)</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[star][]" value="3" id="filter_star3"/>
                                    <label for="filter_star3">
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                    </label>
                                    <span style="float:right">(3)</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[star][]" value="4" id="filter_star4"/>
                                    <label for="filter_star4">
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                    </label>
                                    <span style="float:right">(4)</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[star][]" value="5" id="filter_star5"/>
                                    <label for="filter_star5">
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                        <img src="{{url('assets/images/star.png')}}" height="13" border="0"/>
                                    </label>
                                    <span style="float:right">(5)</span>
                                </div>
                            </div>
                        </div>

                        <div class="filterbox">
                            <div class="filtertitle">Promoção</div>
                            <div class="filtercontent">
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[sale]" value="1" id="filter_sale"/>
                                    <label for="filter_sale">Em promoção</label>
                                    <span style="float:right">(10)</span>
                                </div>
                            </div>
                        </div>

                        <div class="filterbox">
                            <div class="filtertitle">Estados</div>
                            <div class="filtercontent">
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ac" id="filter_state_ac"/>
                                    <label for="filter_state_ac">Acre</label><span
                                        style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="al" id="filter_state_al"/>
                                    <label for="filter_state_al">Alagoas</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ap" id="filter_state_ap"/>
                                    <label for="filter_state_ap">Amapá</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="am" id="filter_state_am"/>
                                    <label for="filter_state_am">Amazonas</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ba" id="filter_state_ba"/>
                                    <label for="filter_state_ba">Bahia</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ce" id="filter_state_ce"/>
                                    <label for="filter_state_ce">Ceará</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="df" id="filter_state_df"/>
                                    <label for="filter_state_df">Distrito Federal</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="es" id="filter_state_es"/>
                                    <label for="filter_state_es">Espirito Santo</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="go" id="filter_state_go"/>
                                    <label for="filter_state_go">Goiás</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ma" id="filter_state_ma"/>
                                    <label for="filter_state_ma">Maranhão</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="mt" id="filter_state_mt"/>
                                    <label for="filter_state_mt">Mato Grosso</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ms" id="filter_state_ms"/>
                                    <label for="filter_state_ms">Mato Grosso do Sul</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="mg" id="filter_state_mg"/>
                                    <label for="filter_state_mg">Minas Gerais</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="pa" id="filter_state_pa"/>
                                    <label for="filter_state_pa">Pará</label><span
                                        style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="pb" id="filter_state_pb"/>
                                    <label for="filter_state_pb">Paraíba</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="pr" id="filter_state_pr"/>
                                    <label for="filter_state_pr">Paraná</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="pe" id="filter_state_pe"/>
                                    <label for="filter_state_pe">Pernambuco</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="pi" id="filter_state_pi"/>
                                    <label for="filter_state_pi">Piauí</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="rj" id="filter_state_rj"/>
                                    <label for="filter_state_rj">Rio de Janeiro</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="rn" id="filter_state_rn"/>
                                    <label for="filter_state_rn">Rio Grande do Norte</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="rs" id="filter_state_rs"/>
                                    <label for="filter_state_rs">Rio Grande do Sul</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="ro" id="filter_state_ro"/>
                                    <label for="filter_state_ro">Rondônia</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="rr" id="filter_state_rr"/>
                                    <label for="filter_state_rr">Roraima</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="sc" id="filter_state_sc"/>
                                    <label for="filter_state_sc">Santa Catarina</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="sp" id="filter_state_sp"/>
                                    <label for="filter_state_sp">São Paulo</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="se" id="filter_state_se"/>
                                    <label for="filter_state_se">Sergipe</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[state][]" value="to" id="filter_state_to"/>
                                    <label for="filter_state_to">Tocantins</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                            </div>
                        </div>

                        <div class="filterbox">
                            <div class="filtertitle">Região</div>
                            <div class="filtercontent">
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[region][]" value="norte"
                                           id="filter_region_norte"/>
                                    <label for="filter_region_norte">Norte</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[region][]" value="nordeste"
                                           id="filter_region_nordeste"/>
                                    <label for="filter_region_nordeste">Nordeste</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[region][]" value="centro-oeste"
                                           id="filter_region_centro"/>
                                    <label for="filter_region_centro">Centro-Oeste</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[region][]" value="sudeste"
                                           id="filter_region_sudeste"/>
                                    <label for="filter_region_sudeste">Sudeste</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                                <div class="filteritem">
                                    <input type="checkbox" name="filter[region][]" value="sul" id="filter_region_sul"/>
                                    <label for="filter_region_sul">Sul</label><span style="float:right">({{rand(0,100)}})</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>
            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
</section>
<!-- ========================================= TOP BRANDS ========================================= -->
<section id="top-brands" class="wow fadeInUp">
    <div class="container">
        <div class="carousel-holder" >

            <div class="title-nav">
                <h1 class="mb-0">Top Marcas</h1>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div><!-- /.title-nav -->

            <div id="owl-brands" class="owl-carousel brands-carousel">

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="{{asset('assets/images/default.png')}}" />
                    </a>
                </div><!-- /.carousel-item -->

            </div><!-- /.brands-caresoul -->

        </div><!-- /.carousel-holder -->
    </div><!-- /.container -->
</section><!-- /#top-brands -->
<!-- ========================================= TOP BRANDS : END ========================================= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h1>Produtos em Destaque</h1>
                    <div class="widget_body">
                        <x-widget-item :list="$listFeatured"></x-widget-item>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h1>Promoções</h1>
                    <div class="widget_body">
                        <x-widget-item :list="$listFeatured"></x-widget-item>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h1>Mais Vendidos</h1>
                    <div class="widget_body">
                        <x-widget-item :list="$listFeatured"></x-widget-item>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                    <form method="POST">
                        <input class="subemail" name="email" placeholder="Subscribe to our newsletter">
                        <input type="submit" value="Subscribe"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="links">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href=""><img width="150" src="{{url('assets/images/logo.png')}}"/></a><br/><br/>
                    <strong>Slogan da Loja Virtual</strong><br/><br/>
                    Endereço da Loja Virtual
                </div>
                <div class="col-sm-8 linkgroups">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Categorias</h3>
                            <ul>
                                <li><a href="#">Categoria X</a></li>
                                <li><a href="#">Categoria X</a></li>
                                <li><a href="#">Categoria X</a></li>
                                <li><a href="#">Categoria X</a></li>
                                <li><a href="#">Categoria X</a></li>
                                <li><a href="#">Categoria X</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 3</a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 5</a></li>
                                <li><a href="#">Menu 6</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="#">Menu 1</a></li>
                                <li><a href="#">Menu 2</a></li>
                                <li><a href="#">Menu 3</a></li>
                                <li><a href="#">Menu 4</a></li>
                                <li><a href="#">Menu 5</a></li>
                                <li><a href="#">Menu 6</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">© <span>Loja 2.0</span> - Todos os direitos reservados.</div>
                <div class="col-sm-6">
                    <div class="payments">
                        <img src="{{url('assets/images/visa.png')}}"/>
                        <img src="{{url('assets/images/visa.png')}}"/>
                        <img src="{{url('assets/images/visa.png')}}"/>
                        <img src="{{url('assets/images/visa.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    var BASE_URL = '{{env('APP_URL')}}';
    {{--    @if(isset($maxslider))--}}
    var maxslider = 1297;
    {{--    @endif--}}
</script>

<script type="text/javascript" src="{{url('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/owl-carrousel.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/script.js')}}"></script>

@yield('scripts')

</body>
</html>
