@extends('layouts.app')

@section('title', "{$role->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('cargos.index')}}">Cargos</a></li>
            <li class="breadcrumb-item active">{{$role->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$role->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Nome do Cargo:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$role->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Descrição:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$role->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($role->created_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($role->updated_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{route('cargos.index')}}" class="btn btn-outline-secondary">
                           <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                        <form action="{{route('cargos.destroy', $role->id)}}" method="post" class="ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Excluir Cargo
                            </button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
