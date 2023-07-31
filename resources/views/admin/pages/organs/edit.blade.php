@extends('layouts.app')

@section('title', 'Prefeituras')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edição Prefeitura</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('prefeitura.update', $organ->id)}}">
                @csrf
                @method('PUT')
                @include('admin.includes.notification')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edição prefeitura - {{$organ->name}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="name" value="{{$organ->name ?? old('name')}}"
                                           placeholder="Informe o nome da empresa">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="email" class="form-control" name="email" value="{{$organ->email ?? old('email')}}"
                                           placeholder="Informe o e-mail">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">CNPJ/CPF: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="number_document" value="{{$organ->number_document ?? old('number_document')}}"
                                           placeholder="Informe o documento">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone:
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="tel" class="form-control" name="telefone" value="{{$organ->telefone ?? old('telefone')}}"
                                           placeholder="Informe o telefone comercial">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Ramal: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="celular" value="{{$organ->celular ?? old('celular')}}"
                                           placeholder="Informe o celular">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informações de Endereço</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <div class="form-group">
                                    <label class="control-label col-form-label">CEP: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="cep" placeholder="Informe o cep" value="{{$organ->cep ?? old('cep')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Logradouro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="logradouro" value="{{$organ->logradouro ?? old('logradouro')}}"
                                           placeholder="Informe o logradouro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Cidade: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="cidade" value="{{$organ->cidade ?? old('cidade')}}"
                                           placeholder="Informe o complemento">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label class="control-label col-form-label">Estado: <span
                                        class="text-info">(*)</span></label>
                                <div class="form-group">
                                    <select name="estado" class="form-control select2" style="width: 100%;">
                                        <optgroup label="Estado Atual">
                                            <option value="{{$organ->estado}}">{{$organ->estado}}</option>
                                        </optgroup>
                                        <optgroup label="Escolhe outro estado">
                                            <option value="AC">AC</option>
                                            <option value="AL">AL</option>
                                            <option value="AM">AM</option>
                                            <option value="AP">AP</option>
                                            <option value="BA">BA</option>
                                            <option value="CE">CE</option>
                                            <option value="DF">DF</option>
                                            <option value="ES">ES</option>
                                            <option value="GO">GO</option>
                                            <option value="MA">MA</option>
                                            <option value="MG">MG</option>
                                            <option value="MS">MS</option>
                                            <option value="MT">MT</option>
                                            <option value="PA">PA</option>
                                            <option value="PB">PB</option>
                                            <option value="PE">PE</option>
                                            <option value="PI">PI</option>
                                            <option value="PR">PR</option>
                                            <option value="RJ">RJ</option>
                                            <option value="RN">RN</option>
                                            <option value="RO">RO</option>
                                            <option value="RR">RR</option>
                                            <option value="RS">RS</option>
                                            <option value="SC">SC</option>
                                            <option value="SE">SE</option>
                                            <option value="SP">SP</option>
                                            <option value="TO">TO</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Bairro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="bairro" value="{{$organ->bairro ?? old('bairro')}}"
                                           placeholder="Informe o bairro">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Número: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="numero" value="{{$organ->numero ?? old('numero')}}"
                                           placeholder="Informe o número">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Complemento:</label>
                                    <input type="text" class="form-control" name="complemento" value="{{$organ->complemento ?? old('complemento')}}"
                                           placeholder="Informe o complemento">
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
                                        <input name="bol_active" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="1" @if($organ->bol_active == 1) checked @endif>
                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>
                                        <input name="bol_active" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="0" @if($organ->bol_active == 0) checked @endif>
                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('prefeitura.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Cancelar
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
