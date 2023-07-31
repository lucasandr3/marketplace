@extends('layouts.app')

@section('title', "{$unit->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('planos.index')}}">Unidades</a></li>
            <li class="breadcrumb-item active">{{$unit->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Unidade {{$unit->name}}</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome da Unidade:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->name}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">E-mail:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Tel. Comercial:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->phone}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Ramal / Celular:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->mobile}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CNPJ:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->number_document}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Logotipo:</label>
                                <div class="col-md-8">
                                    <img src="{{url("assets/images/{$unit->logo}")}}" width="80" class="radius-3"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Informações de Endereço</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->zipcode}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->street}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Cidade:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->city}} - {{$unit->address()->uf}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Bairro:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->neighborhood}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Número:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->number}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Complemento:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$unit->address()->complement ?? 'Não Informado'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <h4 class="card-title">Informações Administrativas</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>
                                <div class="col-md-8">
                                    <p class="{{$unit->status->class}} mb-0">
                                        {{$unit->status->label}}
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
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($unit->created_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{\Carbon\Carbon::parse($unit->updated_at)->format('d/m/Y - H:i')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex">
                    <a href="{{route('unidades.index')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                    <form method="post" action="{{route('unidades.destroy', $unit->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Excluir Unidade</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
