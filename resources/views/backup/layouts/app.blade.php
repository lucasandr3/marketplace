<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('hub')}}">Marketplace</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/stores')) active @endif"  href="{{route('stores')}}"><i class="fa fa-home"></i> Lojas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/products')) active @endif" href="{{route('products')}}"><i class="fa fa-cubes"></i> Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/categories')) active @endif" href="{{route('categories')}}"><i class="fa fa-list"></i> Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/cotacoes')) active @endif" href="{{route('cotacoes')}}"><i class="fa fa-exchange"></i> Cotações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/pedidos')) active @endif" href="{{route('meus_pedidos')}}"><i class="fa fa-file-text"></i> Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->is('admin/notificacoes')) active @endif" href="{{route('notifications')}}"><i class="fa fa-bell"></i> Notificações</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form class="logout" action="{{route('logout')}}" method="post">
                            @csrf
                            <a class="nav-link active" href="javascript:void(0)" onclick="document.querySelector('form.logout').submit()"><i class="fa fa-sign-out"></i> Sair</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
