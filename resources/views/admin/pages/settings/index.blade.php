@extends('layouts.app')

@section('title', 'Configurações')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Configurações</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <i class="mdi mdi-settings"></i> Configurações do sistema
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 mb-2 mb-sm-0">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill"
                               href="#v-pills-loja" role="tab" aria-controls="v-pills-home"
                               aria-selected="true">
                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Loja</span>
                            </a>
                            <a class="nav-link" id="v-pills-payment-tab" data-toggle="pill"
                               href="#v-pills-payment" role="tab" aria-controls="v-pills-profile"
                               aria-selected="false">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Tipos de Pagamento</span>
                            </a>
                            <a class="nav-link" id="v-pills-frete-tab" data-toggle="pill"
                               href="#v-pills-frete" role="tab" aria-controls="v-pills-frete"
                               aria-selected="false">
                                <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Frete</span>
                            </a>
                            <a class="nav-link" id="theme-tab" data-toggle="pill"
                               href="#theme" role="tab" aria-controls="theme"
                               aria-selected="false">
                                <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                <span class="d-none d-lg-block">Tema do sistema</span>
                            </a>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-sm-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-loja" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <h5>Aqui você configura as unidades do sistema.</h5>
                                <p>Unidades são ou é a empresa que irá participar das licitações</p>
                                <p><b>{{$quantities->get('totalStores')}} Loja(s)</b></p>
                                <p><a href="#">Configurar <i class="mdi mdi-arrow-right"></i></a></p>
                            </div>

                            <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                                 aria-labelledby="v-pills-payment-tab">
                                <h5>Aqui você configura os Tipos de Pagamento do sistema.</h5>
                                <p>Plataformas são os sistemas de licitações, tanto privados ou públicos do país</p>
                                <p><b>0 Tipos de Pagamento(s)</b></p>
                                <p><a href="#">Configurar <i class="mdi mdi-arrow-right"></i></a></p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-frete" role="tabpanel"
                                 aria-labelledby="v-pills-frete-tab">
                                <h5>Aqui você configura os Tipos de Frete.</h5>
                                <p>Serviços de entrega de produtos</p>
                                <p><b>Frete</b></p>
                                <p><a href="{{route('frete')}}">Configurar <i class="mdi mdi-arrow-right"></i></a></p>
                            </div>
                            <div class="tab-pane fade" id="theme" role="tabpanel"
                                 aria-labelledby="theme-tab-tab">
                                <h5>Aqui você configura as tarefas do planer.</h5>
                                <p>As tarefas ficam na central de licitações</p>
                                <aside>
                                    <div class="customizer-body">
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- Tab 1 -->
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="p-3 border-bottom">
                                                    <!-- Sidebar -->
                                                    <h5 class="font-medium mb-2 mt-2">Tema do Sistema</h5>
                                                    <div class="checkbox checkbox-info mt-3">
                                                        <input type="checkbox" name="theme-view" class="material-inputs" id="theme-view">
                                                        <label for="theme-view"> <span>Dark Theme</span> </label>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                <div class="p-3">
                                                    <!-- Logo BG -->
                                                    <h5 class="font-medium mb-2 mt-2">Logo</h5>
                                                    <ul class="theme-color m-0 p-0">
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin1"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin2"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin3"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin4"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin5"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-logobg="skin6"></a>
                                                        </li>
                                                    </ul>
                                                    <!-- Logo BG -->
                                                </div>
                                                <div class="p-3">
                                                    <!-- Navbar BG -->
                                                    <h5 class="font-medium mb-2 mt-2">Cabeçalho</h5>
                                                    <ul class="theme-color m-0 p-0">
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin1"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin2"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin3"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin4"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin5"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-navbarbg="skin6"></a>
                                                        </li>
                                                    </ul>
                                                    <!-- Navbar BG -->
                                                </div>
                                                <div class="p-3">
                                                    <!-- Logo BG -->
                                                    <h5 class="font-medium mb-2 mt-2">Menu Lateral</h5>
                                                    <ul class="theme-color m-0 p-0">
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin1"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin2"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin3"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin4"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin5"></a>
                                                        </li>
                                                        <li class="theme-item list-inline-item mr-1">
                                                            <a href="javascript:void(0)" class="theme-link radius-3 d-block" data-sidebarbg="skin6"></a>
                                                        </li>
                                                    </ul>
                                                    <!-- Logo BG -->
                                                </div>
                                                </div>
                                            </div>
                                            <!-- End Tab 1 -->
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div> <!-- end tab-content-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </div> <!-- end card-body-->
{{--            <div class="card-footer">--}}

{{--            </div>--}}
        </div>

    </div>
@endsection
