@extends('layouts.app')

@section('title', 'Modalidades')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('modalities.index')}}">Modalidades</a></li>
            <li class="breadcrumb-item active">Nova Modalidade</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('modalities.store')}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro de Modalidade</h4>
                    </div>
                    <div class="card-body">
                        @include('admin.includes.notification')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pencil-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bagde" placeholder="Digite o nome da modalidade"
                                   aria-label="name" aria-describedby="basic-addon1" name="type"
                                   value="{{ old('type') }}" required autocomplete="name" autofocus>
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
                        <a href="{{route('modalities.index')}}" class="btn btn-outline-secondary">
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
