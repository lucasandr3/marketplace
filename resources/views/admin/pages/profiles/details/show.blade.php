@extends('layouts.app')

@section('title', "{$plan->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('planos.index')}}">Planos</a></li>
            <li class="breadcrumb-item active">{{$plan->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    @include('admin.includes.notification')
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$plan->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Nome do Plano:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$plan->name}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Url:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$plan->url}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Preço:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">R$ {{number_format($plan->price, 2, ',', '.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Descrição:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{$plan->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($plan->created_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                    <div class="col-md-8">
                                        <p class="form-control-static">{{\Carbon\Carbon::parse($plan->updated_at)->format('d/m/Y - H:i')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{route('planos.index')}}" class="btn btn-outline-secondary">
                           <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                        <form action="{{route('planos.destroy', $plan->url)}}" method="post" class="ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Excluir Plano
                            </button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
