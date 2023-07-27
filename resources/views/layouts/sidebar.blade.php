<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">SEÇÃO ANALÍTICA</span>
                </li>
{{--                <li class="sidebar-item @active('empresa') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark @active('empresa') active @endactive" href="{{route('empresa.index')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-bank"></i>--}}
{{--                        <span class="hide-menu">Dados Empresa</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark" href="{{route('dashboard')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-collage"></i>
                        <span class="hide-menu">Dashboard </span>
                    </a>
                </li>
                <li class="sidebar-item @if(request()->is('admin/stores')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/stores')) active @endif" href="{{route('stores')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-store"></i>
                        <span class="hide-menu">Lojas </span>
                    </a>
                </li>
                <li class="sidebar-item @if(request()->is('admin/products')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/products')) active @endif" href="{{route('products')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-cube"></i>
                        <span class="hide-menu">Produtos </span>
                    </a>
                </li>
{{--                <li class="sidebar-item @active('relatorios') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark @active('relatorios') active @endactive" href="{{route('relatorios')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-file-pdf-box"></i>--}}
{{--                        <span class="hide-menu">Relatórios </span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">SEÇÃO VENDAS</span>
                </li>
                <li class="sidebar-item @if(request()->is('admin/categories')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/categories')) active @endif" href="{{route('categories')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-sitemap"></i>
                        <span class="hide-menu">Categorias </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">SEÇÃO ADMINISTRATIVA</span>
                </li>
                <li class="sidebar-item @if(request()->is('admin/cotacoes')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/cotacoes')) active @endif" href="{{route('cotacoes')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-file-check"></i>
                        <span class="hide-menu">Cotações </span>
                    </a>
                </li>
                <li class="sidebar-item @if(request()->is('admin/pedidos')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/pedidos')) active @endif" href="{{route('meus_pedidos')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-receipt"></i>
                        <span class="hide-menu">Pedidos </span>
                    </a>
                </li>
{{--                <li class="sidebar-item @active('vendedores') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark sidebar-link @active('vendedores') active @endactive" href="{{route('pedidos')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-account-multiple-plus"></i>--}}
{{--                        <span class="hide-menu">Vendedores</span></a>--}}
{{--                </li>--}}
                <li class="sidebar-item @if(request()->is('admin/notificacoes')) active @endif">
                    <a class="sidebar-link waves-effect waves-dark @if(request()->is('admin/notificacoes')) active @endif" href="{{route('notifications')}}"
                       aria-expanded="false">
                        <i class="mdi mdi-bell"></i>
                        <span class="hide-menu">Notificações </span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">SEÇÃO GERENCIAL</span>
                </li>
{{--                <li class="sidebar-item @active('planos') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark @active('planos') active @endactive" href="{{route('planos.index')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-tag-multiple"></i>--}}
{{--                        <span class="hide-menu">Planos </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item @active('perfis') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark sidebar-link @active('perfis') active @endactive" href="{{route('perfis.index')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-account-switch"></i>--}}
{{--                        <span class="hide-menu">Perfis</span></a>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item @active('cargos') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark sidebar-link @active('cargos') active @endactive" href="{{route('cargos.index')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-account-card-details"></i>--}}
{{--                        <span class="hide-menu">Cargos</span></a>--}}
{{--                </li>--}}
{{--                <li class="sidebar-item @active('permissoes') selected @endactive">--}}
{{--                    <a class="sidebar-link waves-effect waves-dark sidebar-link @active('permissoes') active @endactive" href="{{route('permissoes.index')}}"--}}
{{--                       aria-expanded="false">--}}
{{--                        <i class="mdi mdi-folder-lock"></i>--}}
{{--                        <span class="hide-menu">Permissões</span></a>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Configurações"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="#" class="link" data-toggle="tooltip" title="Meus dados"><i class="mdi mdi-account-settings-variant"></i></a>
        <!-- item-->
        <a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="Sair do Sistema"
           onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
            <i class="mdi mdi-power"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
