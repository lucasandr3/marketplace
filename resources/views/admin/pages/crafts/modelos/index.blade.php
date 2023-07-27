@extends('layouts.app')

@section('title', 'Ofícios')

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="formulario-contrato-pncp">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center"
                         style="background-color: rgba(0,0,0,.03);">
                        <h4 class="card-title mb-0 -weight-bold text-dark">
                            <i class="mdi mdi-database-plus mr-2 text-dark"></i>
                            <span id="contrato-header">Modelos de Ofício</span><br>
                            <small class="ml-1">Informe os dados do ofício</small>
                        </h4>
                        <a href="{{route('oficios.modelos.create')}}" class="btn btn-info">Criar Modelo de Ofício</a>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            @foreach($models as $model)
                            <div class="col-sm-12 col-md-6" style="border: 1px solid #ccc;padding: 10px;">
                                {!! $model->model !!}
                                <a href="{{route('oficios.novo', $model->id)}}" class="btn btn-info">Usar Modelo <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
