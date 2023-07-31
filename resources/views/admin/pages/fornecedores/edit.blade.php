@extends('layouts.app')

@section('title', 'Fornecedores')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro Fornecedor</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('fornecedores.update', $fornecedor->id)}}">
                @csrf
                @method('PUT')
                @include('admin.includes.notification')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edição Fornecedor - {{$fornecedor->nome}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="nome"
                                           placeholder="Informe o nome da empresa" value="{{$fornecedor->nome ?? old('nome')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Fantasia: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="fantasia"
                                           placeholder="Informe o fantasia" value="{{$fornecedor->fantasia ?? old('fantasia')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Informe o e-mail" value="{{$fornecedor->email ?? old('email')}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">CNPJ/CPF: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="documento"
                                           placeholder="Informe o documento" value="{{$fornecedor->documento ?? old('documento')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone Comercial:
                                        <small class="text-primary">( obrigatório )</small>
                                    </label>
                                    <input type="tel" class="form-control" name="telefone"
                                           placeholder="Informe o telefone comercial" value="{{$fornecedor->telefone ?? old('telefone')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Celular: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="celular"
                                           placeholder="Informe o celular" value="{{$fornecedor->celular ?? old('celular')}}">
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
                                    <input type="text" class="form-control" name="cep" placeholder="Informe o cep" value="{{$fornecedor->cep ?? old('cep')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Logradouro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="logradouro"
                                           placeholder="Informe o logradouro" value="{{$fornecedor->logradouro ?? old('logradouro')}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Cidade: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="cidade"
                                           placeholder="Informe o complemento" value="{{$fornecedor->cidade ?? old('cidade')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Estado: <span
                                            class="text-info">(*)</span></label>
                                    <select name="estado" class="form-control">
                                        <option value="1" @if ($fornecedor->estado === '1') selected @endif>AC</option>
                                        <option value="2" @if ($fornecedor->estado === '2') selected @endif>AL</option>
                                        <option value="3" @if ($fornecedor->estado === '3') selected @endif>AM</option>
                                        <option value="4" @if ($fornecedor->estado === '4') selected @endif>AP</option>
                                        <option value="5" @if ($fornecedor->estado === '5') selected @endif>BA</option>
                                        <option value="6" @if ($fornecedor->estado === '6') selected @endif>CE</option>
                                        <option value="7" @if ($fornecedor->estado === '7') selected @endif>DF</option>
                                        <option value="8" @if ($fornecedor->estado === '8') selected @endif>ES</option>
                                        <option value="9" @if ($fornecedor->estado === '9') selected @endif>GO</option>
                                        <option value="10" @if ($fornecedor->estado === '10') selected @endif>MA</option>
                                        <option value="11" @if ($fornecedor->estado === '11') selected @endif>MG</option>
                                        <option value="12" @if ($fornecedor->estado === '12') selected @endif>MS</option>
                                        <option value="13" @if ($fornecedor->estado === '13') selected @endif>MT</option>
                                        <option value="14" @if ($fornecedor->estado === '14') selected @endif>PA</option>
                                        <option value="15" @if ($fornecedor->estado === '15') selected @endif>PB</option>
                                        <option value="16" @if ($fornecedor->estado === '16') selected @endif>PE</option>
                                        <option value="17" @if ($fornecedor->estado === '17') selected @endif>PI</option>
                                        <option value="18" @if ($fornecedor->estado === '18') selected @endif>PR</option>
                                        <option value="19" @if ($fornecedor->estado === '19') selected @endif>RJ</option>
                                        <option value="20" @if ($fornecedor->estado === '20') selected @endif>RN</option>
                                        <option value="21" @if ($fornecedor->estado === '21') selected @endif>RO</option>
                                        <option value="22" @if ($fornecedor->estado === '22') selected @endif>RR</option>
                                        <option value="23" @if ($fornecedor->estado === '23') selected @endif>RS</option>
                                        <option value="24" @if ($fornecedor->estado === '24') selected @endif>SC</option>
                                        <option value="25" @if ($fornecedor->estado === '25') selected @endif>SE</option>
                                        <option value="26" @if ($fornecedor->estado === '26') selected @endif>SP</option>
                                        <option value="27" @if ($fornecedor->estado === '27') selected @endif>TO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Bairro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="bairro"
                                           placeholder="Informe o bairro" value="{{$fornecedor->bairro ?? old('bairro')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Número: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="numero"
                                           placeholder="Informe o número" value="{{$fornecedor->numero ?? old('numero')}}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Complemento:</label>
                                    <input type="text" class="form-control" name="complemento"
                                           placeholder="Informe o complemento" value="{{$fornecedor->complemento ?? old('complemento')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informações Administrativas</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Tipo: </label>
                                    <div class="col-sm-9">
                                        <input name="tipo" type="radio" id="customControlValidation2" class="radio-col-green material-inputs" value="M" @if ($fornecedor->tipo === 'M') checked @endif>
                                        <label for="customControlValidation2" class="mb-0 mt-2">Matriz</label>
                                        <input name="tipo" type="radio" id="customControlValidation3" class="radio-col-green material-inputs" value="F" @if ($fornecedor->tipo === 'F') checked @endif>
                                        <label for="customControlValidation3" class="mb-0 mt-2">Filial</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        <input name="ativo" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="ativo" @if ($fornecedor->ativo === 'ativo') checked @endif>
                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>
                                        <input name="ativo" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="inativo" @if ($fornecedor->ativo === 'inativo') checked @endif>
                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('fornecedores.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Descartar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Salvar Alterações
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
