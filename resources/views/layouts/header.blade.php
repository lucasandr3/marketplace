
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{route('hub')}}">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{url('painel/images/logo-venda.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="{{url('painel/images/logo_venda.png')}}" alt="homepage" width="40px" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text font-weight-medium">
                            <!-- dark Logo text -->
{{--                            <img src="{{url('painel/images/logo-text.png')}}" alt="homepage" class="dark-logo" />--}}
                    <!-- Light Logo text -->
                    {{auth()->user()->store->name}}
                        </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto float-left">
                <!-- This is  -->
                <li class="nav-item"> <a
                        class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <!-- ============================================================== -->
            </ul>
            <ul class="navbar-nav mr-auto float-left">
                <!-- This is  -->
                <li class="nav-item">
                    <a class="nav-link d-md-block font-weight-bold"
                       href="javascript:void(0)">
                        {{auth()->user()->name}}
                    </a>
                </li>
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span style="font-size: 16px;">Notificações </span>
                        <i class="mdi mdi-message"></i>
                        @if(auth()->user()->unreadNotifications->count() > 0)
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        @endif
                    </a>
                    @if(auth()->user()->unreadNotifications->count() > 0)
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                            <ul class="list-style-none">
                                <li>
                                    <div class="border-bottom rounded-top py-3 px-4">
                                        <h5 class="mb-0 font-weight-medium">Notificações</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center notifications position-relative" style="height:250px;">
                                        <!-- Message -->
                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                            <a href="#" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-secondary rounded-circle btn-circle"><i class="fa fa-bell"></i></span>
                                                <div class="w-75 d-inline-block v-middle pl-2">
{{--                                                    <h5 class="message-title mt-1" style="margin-bottom: 0 !important;">{!! $notification->message !!}</h5>--}}
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">De: {{$notification->data['message']}}</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">{{$notification->created_at}}</span>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link border-top text-center text-dark pt-3" href="{{route('notifications')}}"> <strong>Ver Todas Notificações</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-right mailbox scale-up p-0 m-0">
                            <ul class="list-style-none">
                                <li>
                                    <div class="border-bottom rounded-top py-3 px-4 text-center">
                                        <h5 class="mb-0 font-weight-medium">Você não tem Notificações</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark d-flex gap-10" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{--                        <img src="../painel/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />--}}
                        <div style="width: 40px;height: 40px;border-radius: 50%;background-color: white;position: relative;top: 15px;" class="d-flex justify-content-center">
                            <span class="text-info font-weight-bold" style="margin-top: -15px">{{substr(Auth::user()->name, 0, 1)}}</span>
                        </div>
                        <span class="font-16">{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu mailbox dropdown-menu-right scale-up">
                        <ul class="dropdown-user list-style-none">
                            <li>
                                <div class="dw-user-box p-3 d-flex">
                                    {{--                                    <div class="u-img"><img src="../painel/images/users/1.jpg" alt="user" class="rounded" width="80"></div>--}}
                                    <i class="mdi mdi-account-settings-variant text-secondary" style="font-size: 27px"></i>
                                    <div class="u-text ml-2">
                                        <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                        <p class="text-muted mb-1 font-14">{{Auth::user()->store->name}}</p>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list">
                                <a href="{{route('perfil')}}" class="px-3 py-2"><i class="mdi mdi-account-settings-variant"></i> Meus Dados</a></li>
                            {{--                            <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-wallet"></i> My Balance</a></li>--}}
                            {{--                            <li class="user-list"><a class="px-3 py-2" href="#"><i class="ti-email"></i> Inbox</a></li>--}}
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list"><a class="px-3 py-2" href="{{route('configuracoes')}}"><i class="ti-settings"></i> Configurações do sistema</a></li>
                            <li role="separator" class="dropdown-divider"></li>
                            <li class="user-list">
                                <a class="px-3 py-2" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Sair do Sistema
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
