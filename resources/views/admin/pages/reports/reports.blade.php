@extends('layouts.app')

@section('title', 'Relatórios')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('relatorios')}}">Relatórios</a></li>
            <li class="breadcrumb-item active">Processo</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"
                 style="background-color: rgba(0,0,0,.03);">
                <h4 class="card-title mb-0 -weight-bold text-dark">
                    <i class="fa fa-file-pdf mr-2 text-dark"></i>
                    <span id="contrato-header">Relatórios</span><br>
                    <small>Processo - {{$process->my_number}}</small>
                </h4>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg text-white d-inline-block text-center radius-3 bg-info">
                                        <i class="ti-files"></i>
                                    </div>
                                    <div class="ml-2 align-self-center flex-1">
                                        <h5 class="mb-0 font-weight-light">Itens do Processo</h5>
                                        <a href="{{route('report.items', $process->id)}}" class="font-weight-bold">Gerar Relatório <i class="mdi mdi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-outline-secondary" href="{{route('relatorios')}}">
                    <i class="mdi mdi-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade " id="centermodaldesc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Descrição do processo</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="body-desc p-1"></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection
