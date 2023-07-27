@extends('layouts.app')

@section('title', 'Fornecedores')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro Fornecedor</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('fornecedores.store')}}">
                @csrf
                @include('admin.includes.notification')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Cadastro Comprador</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Nome: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="nome"
                                           placeholder="Informe o nome da empresa">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Fantasia: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="fantasia"
                                           placeholder="Informe o fantasia">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">E-mail: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Informe o e-mail">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">CNPJ/CPF: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="documento"
                                           placeholder="Informe o documento">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Telefone Comercial:
                                        <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="telefone"
                                           placeholder="Informe o telefone comercial">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Celular: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="celular"
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
                                    <input type="text" class="form-control" name="cep" placeholder="Informe o cep">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Logradouro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="tel" class="form-control" name="logradouro"
                                           placeholder="Informe o logradouro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Cidade: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="cidade"
                                           placeholder="Informe o complemento">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Estado: <span
                                            class="text-info">(*)</span></label>
                                    <select name="estado" class="form-control">
                                        <option value="1">AC</option>
                                        <option value="2">AL</option>
                                        <option value="3">AM</option>
                                        <option value="4">AP</option>
                                        <option value="5">BA</option>
                                        <option value="6">CE</option>
                                        <option value="7">DF</option>
                                        <option value="8">ES</option>
                                        <option value="9">GO</option>
                                        <option value="10">MA</option>
                                        <option value="11">MG</option>
                                        <option value="12">MS</option>
                                        <option value="13">MT</option>
                                        <option value="14">PA</option>
                                        <option value="15">PB</option>
                                        <option value="16">PE</option>
                                        <option value="17">PI</option>
                                        <option value="18">PR</option>
                                        <option value="19">RJ</option>
                                        <option value="20">RN</option>
                                        <option value="21">RO</option>
                                        <option value="22">RR</option>
                                        <option value="23">RS</option>
                                        <option value="24">SC</option>
                                        <option value="25">SE</option>
                                        <option value="26">SP</option>
                                        <option value="27">TO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Bairro: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="bairro"
                                           placeholder="Informe o bairro">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Número: <small class="text-primary">( obrigatório )</small></label>
                                    <input type="text" class="form-control" name="numero"
                                           placeholder="Informe o número">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Complemento:</label>
                                    <input type="text" class="form-control" name="complemento"
                                           placeholder="Informe o complemento">
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
                                        <input name="tipo" type="radio" id="customControlValidation2" class="radio-col-green material-inputs" value="M" checked>
                                        <label for="customControlValidation2" class="mb-0 mt-2">Matriz</label>
                                        <input name="tipo" type="radio" id="customControlValidation3" class="radio-col-green material-inputs" value="F">
                                        <label for="customControlValidation3" class="mb-0 mt-2">Filial</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-form-label">Status: </label>
                                    <div class="col-sm-9">
                                        <input name="ativo" type="radio" id="customControlValidation4" class="radio-col-green material-inputs" value="ativo" checked>
                                        <label for="customControlValidation4" class="mb-0 mt-2">Ativo</label>
                                        <input name="ativo" type="radio" id="customControlValidation5" class="radio-col-green material-inputs" value="inativo">
                                        <label for="customControlValidation5" class="mb-0 mt-2">Inativo</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('compradores.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
