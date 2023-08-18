@extends('layouts.app')

@section('title', 'Frete')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('frete')}}">Frete</a></li>
            <li class="breadcrumb-item active">Atualizar Serviço</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('frete.update', $service->id)}}">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Atualização de Serviço</h4>
                    </div>
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <label class="control-label col-form-label">Loja: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <select class="select2 form-control custom-select" name="store_id" style="width: 100%; height:36px;">
                                    <option>Selecione uma opção</option>
                                    @foreach($stores as $store)
                                        <option value="{{$store->id}}" @if($service->store_id == $store->id) selected @endif>{{$store->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome do Serviço: <small class="text-primary">(
                                            obrigatório )</small></label>
                                    <input type="text" class="form-control" name="shipping_name" value="{{$service->shipping_name}}"
                                           placeholder="Ex: correios">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Número do contrato:</label>
                                    <input type="text" class="form-control" name="shipping_code_contract" value="{{$service->shipping_code_contract}}"
                                           placeholder="informe o número do contrato">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Senha do contrato:</label>
                                    <input type="password" class="form-control" name="shipping_pass_contract" value="{{$service->shipping_pass_contract}}"
                                           placeholder="informe a senha do contrato">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Cep de Origem:</label>
                                    <input type="text" class="form-control" name="shipping_zipcode" value="{{$service->shipping_zipcode}}"
                                           placeholder="informe o cep de origem">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Taxa de serviço:</label>
                                    <input type="number" class="form-control" name="shipping_tax" value="{{$service->shipping_tax}}"
                                           placeholder="taxa adicional de serviço">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3 mb-3">
                                <input name="shipping_active" class="material-inputs" type="radio" value="1" id="s-ativo" @if($service->shipping_active == 1) checked @endif />
                                <label for="s-ativo">Ativo</label>
                            </div>
                            <div class="col-md-3 mb-3">
                                <input name="shipping_active" class="material-inputs" type="radio" value="0" id="s-inativo" @if($service->shipping_active == 0) checked @endif />
                                <label for="s-inativo">Inativo</label>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('frete')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
