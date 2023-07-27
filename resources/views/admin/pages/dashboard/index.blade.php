@extends('layouts.app')

@section('title', 'Dashboard')

@once
    @push('styles')
        <link href="{{url('assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{url('assets/js/pages/chartist/chartist-init.css')}}" rel="stylesheet">
        <link href="{{url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
        <link href="{{url('assets/libs/c3/c3.min.css')}}" rel="stylesheet">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active">Meu Painel</li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-info">
                            <i class="mdi mdi-cart"></i>
                        </div>
                        <div class="ml-2 align-self-center flex-1">
                            <h3 class="mb-0 font-weight-light">{{$totalProcessYear}}</h3>
                            <span class="text-muted mb-0">Vendas Realizadas - {{date('Y')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-warning">
                            <i class="mdi mdi-cart"></i></div>
                        <div class="ml-2 align-self-center flex-1">
                            <h3 class="mb-0 font-weight-light">0</h3>
                            <span class="text-muted mb-0">Vendas Realizadas - {{date('Y', strtotime('-1 year'))}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-primary">
                            <i class="mdi mdi-account-multiple"></i></div>
                        <div class="ml-2 align-self-center flex-1">
                            <h3 class="mb-0 font-weight-light">{{$total_companies}}</h3>
                            <span class="text-muted mb-0">Total Clientes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg text-white d-inline-block text-center rounded-circle bg-danger">
                            <i class="mdi mdi-account-card-details"></i></div>
                        <div class="ml-2 align-self-center flex-1">
                            <h3 class="mb-0 font-weight-light">{{$totalSupliers}}</h3>
                            <span class="text-muted mb-0">Total Vendedores</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h3 class="card-title">Vendas por Ano</h3>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-success"><i
                                                    class="fa fa-shopping-cart mr-2 "></i>{{date('Y') - 1}}</h6>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <h6 class="text-info"><i
                                                    class="fa fa-shopping-cart mr-2"></i>{{date('Y')}}</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="amp-pxl" style="height: 360px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">5 Itens mais Vendidos </h3>
                    <h6 class="card-subtitle">Itens que mais são vendidos</h6>
                    <div id="itens-mais-vendidos" style="height:290px; width:100%;"></div>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">5 Clientes que mais Compram </h3>
                    <h6 class="card-subtitle">Vezes em que a plataforma foi usada</h6>
                    <div id="plataformas-mais-usadas" style="height:290px; width:100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h3 class="card-title">Vendas dos Últimos 15 Dias</h3>
                            <h6 class="card-subtitle">Comparação dos últimos 15 dias atuais, com últimos 15 dias do ano anterior</h6>
                        </div>
                        <div class="ml-auto align-self-center">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item px-2">
                                    <h6 class="text-success">
                                        <i class="fa fa-circle font-10 mr-2 "></i>
                                        {{date('Y', strtotime('-1 Year'))}}
                                    </h6>
                                </li>
                                <li class="list-inline-item px-2">
                                    <h6 class="text-info">
                                        <i class="fa fa-circle font-10 mr-2"></i>
                                        {{date('Y')}}
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="campaign ct-charts"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/libs/chartist/dist/chartist.min.js')}}"></script>
        <script src="{{url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <!--c3 JavaScript -->
        <script src="{{url('assets/libs/d3/dist/d3.min.js')}}"></script>
        <script src="{{url('assets/libs/c3/c3.min.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{url('assets/js/pages/dashboards/dashboard1.js')}}"></script>
    @endpush
@endonce
