@extends('layouts.app')

@section('title', 'Cargos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('cargos.index')}}">Cargos</a></li>
            <li class="breadcrumb-item active">Novo Cargo</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('cargos.store')}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cargos</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Digite o nome do cargo"
                                   aria-label="name" aria-describedby="basic-addon1" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Descrição interna"
                                   aria-label="description" aria-describedby="basic-addon1"
                                   name="description"
                                   value="{{ old('description') }}" required autocomplete="description"
                                   autofocus>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('cargos.index')}}" class="btn btn-outline-secondary">
                           <i class="fa fa-arrow-left"></i> Descartar
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
