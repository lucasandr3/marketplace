@extends('layouts.app')

@section('title', 'Unidades')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('steps.index')}}">Planer</a></li>
            <li class="breadcrumb-item active">Cadastro de tarefa</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('steps.store')}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro de Tarefa</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pencil-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bagde" placeholder="Digite o nome da tarefa"
                                   aria-label="name" aria-describedby="basic-addon1" name="step"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-exchange-alt"></i></span>
                            </div>
                            <select class="form-control" name="bol_active">
                                <option value="">Selecione o status</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('steps.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
