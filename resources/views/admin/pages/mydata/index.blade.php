@extends('layouts.app')

@section('title', "{$user->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('usuarios.index')}}">Meus Dados</a></li>
            <li class="breadcrumb-item active">{{$user->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$user->name}}</h4>
                    </div>
                    <div class="card-body">
                        @include('admin.includes.notification')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Nome do Operador:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$user->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">E-mail:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$user->email}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Empresa:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$user->tenant->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Cargo(s):</label>
                                    <div class="col-md-8">
                                        @foreach($user->myRoles() as $role)
                                            <p class="form-control-static">{{$role->name}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($user->updated_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{route('meus_dados.edit', $user->id)}}" type="submit" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i> Editar Dados
                        </a>
                    </div>
                </div>
        </div>
    </div>
@endsection