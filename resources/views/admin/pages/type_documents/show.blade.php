@extends('layouts.app')

@section('title', "{$typeDocument->type}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('type_documents.index')}}">Tipos de Documentos</a></li>
            <li class="breadcrumb-item active">{{$typeDocument->type}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$typeDocument->type}}</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Tipo de Documento:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$typeDocument->type}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>
                                <div class="col-md-8">
                                    <p class="{{$typeDocument->status->class}} mb-0">
                                        {{$typeDocument->status->label}}
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
                                    <p style="background-color: {{$typeDocument->color}}; border-radius: 3px;margin-bottom: 0;">
                                        <span class="text-light">{{$typeDocument->color}}</span>
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
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($typeDocument->created_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($typeDocument->updated_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{route('type_documents.index')}}" class="btn btn-outline-secondary">
                        <i class="fa fa-arrow-left"></i> Voltar
                    </a>
                    <form action="{{route('type_documents.destroy', $typeDocument->id)}}" method="post" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Excluir Tipo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
