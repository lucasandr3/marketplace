@extends('layouts.app')

@section('title', 'Unidades')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('unidades.index')}}">Unidades</a></li>
            <li class="breadcrumb-item active">Nova Unidade</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('type_documents.store')}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro Tipo de Documento</h4>
                    </div>
                    <div class="card-body">
                        @include('admin.includes.notification')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-folder"></i></span>
                            </div>
                            <input type="text" class="form-control bagde" placeholder="Digite o tipo de documento"
                                   aria-label="name" aria-describedby="basic-addon1" name="type"
                                   value="{{ old('type') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-paint-brush"></i></span>
                            </div>
                            <input type="color" class="form-control bagde" placeholder="Escolha uma cor"
                                   aria-label="name" aria-describedby="basic-addon1" name="color"
                                   value="{{ old('color') }}" required autocomplete="name" autofocus>
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
                        <a href="{{route('type_documents.index')}}" class="btn btn-outline-secondary">
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
