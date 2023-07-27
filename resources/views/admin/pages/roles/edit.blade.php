@extends('layouts.app')

@section('title', "{$role->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('cargos.index')}}">Cargos</a></li>
            <li class="breadcrumb-item active">Editar - {{$role->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('cargos.update', $role->id)}}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$role->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Digite o nome do cargo"
                                   aria-label="name" aria-describedby="basic-addon1" name="name"
                                   value="{{ $role->name }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-file-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Descrição interna"
                                   aria-label="description" aria-describedby="basic-addon1"
                                   name="description"
                                   value="{{ $role->description }}" required autocomplete="description"
                                   autofocus>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('cargos.index')}}" class="btn btn-outline-secondary">
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