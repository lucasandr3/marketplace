@extends('layouts.app')

@section('title', "Detalhes do {$plan->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.show', $plan->url)}}">{{$plan->name}}</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="widget-content searchable-container list">
        <div class="card card-body mb-0">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h4 class="card-title">Detalhes do - {{$plan->name}}</h4>
                </div>
                <div class="col-md-8 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{route('planos.detalhes.create', $plan->url)}}" class="btn btn-info"><i
                            class="mdi mdi-tag-plus font-16 mr-1 ml-2"></i> Novo Detalhe</a>
                </div>
            </div>
        </div>

        <div class="card card-body pt-0">
            <div class="table-responsive">
                <table class="table table-striped search-table v-middle">
                    <thead class="header-item">
                    <tr>
                        <th class="text-dark font-weight-bold">Nome</th>
                        <th class="text-dark font-weight-bold text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($details as $detail)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                                {{$detail->name}}
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
    </div>
@endsection
