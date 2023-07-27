<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace L6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .front.row {
            margin-bottom: 40px;
        }

        .image-product {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Marketplace</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if(request()->is('/')) active @endif">
                    <a class="nav-link @if(request()->is('/')) active @endif" aria-current="page"
                       href="{{route('home')}}">Home</a>
                </li>
                @foreach($categories as $category)
                    <li class="nav-item @if(request()->is('category/'. $category->slug)) active @endif">
                        <a class="nav-link @if(request()->is('category/'. $category->slug)) active @endif"
                           aria-current="page"
                           href="{{route('category.products', $category->slug)}}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
            <form class="d-flex" role="search">
                {{--                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">--}}
                {{--                <button class="btn btn-outline-success" type="submit">Pesquisar</button>--}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
{{--                        <li class="nav-item @if(request()->is('/')) active @endif">--}}
{{--                            <a class="nav-link" href="#">{{auth()->user()->name}}</a>--}}
{{--                        </li>--}}
                        <li class="nav-item @if(request()->is('/meus_pedidos')) active @endif">
                            <a class="nav-link @if(request()->is('/meus_pedidos')) active @endif"
                               href="{{route('loja.pedidos')}}">Meus Pedidos</a>
                        </li>
                        <li class="nav-item @if(request()->is('/quotation')) active @endif">
                            <a class="nav-link @if(request()->is('/quotation')) active @endif" aria-current="page"
                               href="{{route('quotation')}}">
                                <i class="fa fa-exchange" style="font-size: 20px;"></i>
                                @if(session()->has('quotation'))
                                    <span class="badge text-bg-danger badge-sm" style="font-size: 8px;">{{count(session()->get('quotation'))}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('/cart')) active @endif">
                            <a class="nav-link d-flex @if(request()->is('/cart')) active @endif" aria-current="page"
                               href="{{route('cart')}}">
                                <i class="fa fa-shopping-cart"></i>
                                @if(session()->has('cart'))
                                    <span class="badge text-bg-danger badge-sm">{{count(session()->get('cart'))}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"
                               onclick="event.preventDefault(); document.querySelector('#logout-store').submit()">
                                Sair <i class="fa fa-sign-out"></i>
                            </a>
                            <form id="logout-store" action="{{route('logout')}}" method="post">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Cadastrar
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('register.store')}}">Loja</a></li>
                                    <li><a class="dropdown-item" href="{{route('register.user')}}">Usuário</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item @if(request()->is('/quotation')) active @endif">
                            <a class="nav-link @if(request()->is('/quotation')) active @endif" aria-current="page"
                               href="{{route('quotation')}}">
                                <i class="fa fa-exchange" style="font-size: 20px;"></i>
                                @if(session()->has('quotation'))
                                    <span class="badge text-bg-danger badge-sm" style="font-size: 8px;">{{count(session()->get('quotation'))}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('/cart')) active @endif">
                            <a class="nav-link @if(request()->is('/cart')) active @endif" aria-current="page"
                               href="{{route('cart')}}">
                                <i class="fa fa-shopping-cart" style="font-size: 20px;"></i>
                                @if(session()->has('cart'))
                                    <span class="badge text-bg-danger badge-sm" style="font-size: 8px;">{{count(session()->get('cart'))}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{route('login')}}"><i class="fa fa-sign-in"></i> Entrar</a>
                        </li>
                    @endauth
                </ul>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    @include('flash::message')
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
@yield('scripts')
</body>
</html>