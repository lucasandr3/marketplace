@extends('layouts.app')

@section('title', 'Unidades')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('stores')}}">Lojas</a></li>
            <li class="breadcrumb-item active">Edição Loja</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('stores.update', $store->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edição de Loja</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" value="{{$store->name ?? old('name')}}" name="name"
                                           placeholder="Informe o nome da unidade">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Descrição: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="description"
                                           placeholder="Informe a descrição" value="{{$store->description ?? old('description')}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone:
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="tel" class="form-control" name="phone"
                                           placeholder="Informe o telefone comercial" value="{{$store->phone ?? old('phone')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Ramal / Telefone 2:</label>
                                    <input type="tel" class="form-control" name="mobile_phone"
                                           placeholder="Informe o ramal ou outro telefone" value="{{$store->mobile_phone ?? old('mobile_phone')}}">
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="card-header">--}}
{{--                        <h4 class="card-title">Informações de Endereço</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <x-address :address="$store->address()"></x-address>--}}
{{--                    </div>--}}

                    <div class="card-header">
                        <h4 class="card-title">Logo da Empresa</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <img src="{{asset("storage/{$store->logo}")}}" width="200" class="radius-3 mb-4"/>
                                <div class="form-group">
                                    <label class="control-label col-form-label">Logotipo: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informações de Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        <input name="bol_active" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="1" @if($store->bol_active === 1) checked @endif>
                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>
                                        <input name="bol_active" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="0" @if($store->bol_active === 0) checked @endif>
                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('stores')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Descartar
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
