@extends('layouts.app')

@section('title', "{$store->name}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('stores')}}">Lojas</a></li>
            <li class="breadcrumb-item active">{{$store->name}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{$store->name}}</h4>
                </div>
                <div class="card-body">
                    @include('admin.includes.notification')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Nome da Loja:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$store->name}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Descrição:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$store->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Tel. Comercial:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$store->phone}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Ramal / Celular:</label>
                                <div class="col-md-8">
                                    <p class="form-control-static">{{$store->mobile_phone}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">CNPJ:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->number_document}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-4 font-weight-bold">Logotipo:</label>
                                <div class="col-md-8">
                                    <img src="{{asset("storage/{$store->logo}")}}" width="200" class="radius-3"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="card-header">--}}
{{--                    <h4 class="card-title">Informações de Endereço</h4>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    @include('admin.includes.notification')--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->zipcode}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">CEP:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->street}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Cidade:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->city}} - {{$store->address()->uf}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Bairro:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->neighborhood}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Número:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->number}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Complemento:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{$store->address()->complement ?? 'Não Informado'}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-header">--}}
{{--                    <h4 class="card-title">Informações Administrativas</h4>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Status:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="{{$store->status->class}} mb-0">--}}
{{--                                        {{$store->status->label}}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Data de Cadastro:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{\Carbon\Carbon::parse($store->created_at)->format('d/m/Y - H:i')}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <div class="form-group row">--}}
{{--                                <label class="control-label text-right col-md-4 font-weight-bold">Última Atualização:</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <p class="form-control-static">{{\Carbon\Carbon::parse($store->updated_at)->format('d/m/Y - H:i')}}</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="card-footer d-flex">
                    <a href="{{route('stores')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                    <form method="post" action="{{route('stores.destroy', $store->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Excluir Loja</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
