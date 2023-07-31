@extends('layouts.app')

@section('title', 'Tipos de Documentos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('type_documents.index')}}">Tipos de Documentos</a></li>
            <li class="breadcrumb-item active">Edição</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('type_documents.update', $typeDocument->id)}}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edição Tipo de Documento</h4>
                    </div>
                    <div class="card-body">
                        @include('admin.includes.notification')
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-folder"></i></span>
                            </div>
                            <input type="text" class="form-control bagde" placeholder="Digite o tipo de documento"
                                   aria-label="name" aria-describedby="basic-addon1" name="type"
                                   value="{{ $typeDocument->type ?? old('type') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-paint-brush"></i></span>
                            </div>
                            <input type="color" class="form-control bagde" placeholder="Escolha uma cor"
                                   aria-label="name" aria-describedby="basic-addon1" name="color"
                                   value="{{ $typeDocument->color ?? old('color') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-exchange-alt"></i></span>
                            </div>
                            <select class="form-control" name="bol_active">
                                @if($typeDocument->bol_active)
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                @else
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                @endif
                            </select>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('type_documents.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
