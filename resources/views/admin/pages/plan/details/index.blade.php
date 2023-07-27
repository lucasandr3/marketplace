@extends('layouts.app')

@section('title', "Detalhes do {$plan->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.show', $plan->url)}}">{{$plan->name}}</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">

        <div class="card-header d-flex justify-content-between align-items-center"
             style="background-color: rgba(0,0,0,.03);">
            <h4 class="card-title mb-0 -weight-bold text-dark">
                <i class="fa fa-filter mr-2 text-dark"></i>
                <span id="contrato-header">Detalhes do Plano</span><br>
                <small class="ml-1">{{$plan->name}}</small>
            </h4>
            <div>
                <a href="{{route('planos.detalhes.create', $plan->url)}}" class="btn btn-info"><i
                        class="mdi mdi-tag-plus font-16 mr-1 ml-2"></i> Novo Detalhe</a>
            </div>
        </div>

        <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item bg-info">
                    <tr>
                        <th class="text-light font-weight-bold">Nome</th>
                        <th class="text-light font-weight-bold text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $detail)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                {{$detail->description}}
                            </td>
                            <td class="text-right">
                                <div class="action-btn d-flex justify-content-end">
                                    <a href="{{route('detalhes.plan.edit', [$plan->url, $detail->id])}}"
                                       class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar">
                                        <i class="mdi mdi-pen"></i>
                                    </a>
                                    <form action="{{route('planos.detalhes.destroy', [$plan->url, $detail->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn waves-effect waves-light btn-danger ml-1" data-toggle="tooltip" title="Excluir">
                                            <i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <!-- /.row -->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
            <div class="footer">
                <a href="{{route('planos.index')}}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Voltar para Planos</a>
            </div>
        </div>
    </div>
@endsection
