@extends('layouts.app')

@section('title', "{$department->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('departments.index')}}">Departamentos</a></li>
            <li class="breadcrumb-item active">{{$department->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$department->name}}</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome do Departamento:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$department->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Unidade:</label>
                                <div class="col-md-8">
                                    <p class="mb-0">
                                        {{$department->unit->name}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>
                                <div class="col-md-8">
                                    <p class="{{$department->status->class}} mb-0">
                                        {{$department->status->label}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($department->created_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($department->updated_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{route('departments.index')}}" class="btn btn-outline-secondary">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </a>
                    <form action="{{route('departments.destroy', $department->id)}}" method="post" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Excluir Departamento
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
