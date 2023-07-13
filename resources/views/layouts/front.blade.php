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
<nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-5">
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
            </ul>
            <form class="d-flex" role="search">
                {{--                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">--}}
                {{--                <button class="btn btn-outline-success" type="submit">Pesquisar</button>--}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item @if(request()->is('/')) active @endif">
                            <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                        </li>
                        <li class="nav-item @if(request()->is('/')) active @endif">
                            <a class="nav-link" href="#" onclick="event.preventDefault();
                                                              document.querySelector('form.logout').submit(); ">Sair</a>

                            <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    @endauth
                    <li class="nav-item @if(request()->is('/cart')) active @endif">
                        <a class="nav-link d-flex @if(request()->is('/cart')) active @endif" aria-current="page"
                           href="{{route('cart')}}">
                            Carrinho
                            @if(session()->has('cart'))
                                <span class="badge text-bg-danger badge-sm">{{count(session()->get('cart'))}}</span>
                            @endif
                        </a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 40px;">--}}

{{--    <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

{{--    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

{{--        <ul class="navbar-nav mr-auto">--}}
{{--            <li class="nav-item @if(request()->is('/')) active @endif">--}}
{{--                <a class="nav-link" href="{{route('home')}}">Home</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item @if(request()->is('/carrinho')) active @endif">--}}
{{--                <a class="nav-link" href="{{route('cart')}}">Carrinho</a>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        @auth--}}
{{--            --}}{{--            <ul class="navbar-nav mr-auto">--}}
{{--            --}}{{--                <li class="nav-item @if(request()->is('admin/stores*')) active @endif">--}}
{{--            --}}{{--                    <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas <span class="sr-only">(current)</span></a>--}}
{{--            --}}{{--                </li>--}}
{{--            --}}{{--                <li class="nav-item @if(request()->is('admin/products*')) active @endif">--}}
{{--            --}}{{--                    <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>--}}
{{--            --}}{{--                </li>--}}
{{--            --}}{{--                <li class="nav-item @if(request()->is('admin/categories*')) active @endif">--}}
{{--            --}}{{--                    <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>--}}
{{--            --}}{{--                </li>--}}
{{--            --}}{{--            </ul>--}}

{{--            <div class="my-2 my-lg-0">--}}
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#" onclick="event.preventDefault();--}}
{{--                                                                  document.querySelector('form.logout').submit(); ">Sair</a>--}}

{{--                        <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <span class="nav-link">{{auth()->user()->name}}</span>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endauth--}}

{{--    </div>--}}
{{--</nav>--}}

<div class="container">
    @include('flash::message')
    @yield('content')
</div>
</body>
</html>
