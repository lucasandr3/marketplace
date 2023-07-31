@extends('layouts.app')

@section('title', "Editar Detalhe do {$plan->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active"><a href="{{route('planos.show', $plan->url)}}">{{$plan->name}}</a></li>
            <li class="breadcrumb-item active">Editar Detalhe</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('detalhes.plan.update', [$plan->url, $detail->id])}}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Novo Detalhe do {{$plan->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Insira um detalhe para o {{$plan->name}}"
                                   aria-label="name" aria-describedby="basic-addon1" name="name"
                                   value="{{ $detail->name }}" required autocomplete="name" autofocus>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('planos.detalhes', $plan->url)}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Descartar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Salvar alterações
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
