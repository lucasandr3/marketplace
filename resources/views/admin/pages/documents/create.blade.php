@extends('layouts.app')

@section('title', 'Documentos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro de Documento</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div id="formulario-contrato-pncp">
            <form action="{{route('documents.store', $unit->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center"
                     style="background-color: rgba(0,0,0,.03);">
                    <h4 class="card-title mb-0 -weight-bold text-dark">
                        <i class="fa fa-filter mr-2 text-dark"></i>
                        <span id="contrato-header">Cadastro de Documento para a unidade: {{$unit->name}}</span><br>
                        <small class="ml-1">Informe os dados do documento</small>
                    </h4>
                </div>
                <div class="card-body border-top" id="info-orgao-comprador">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="cnpjContrante" class="control-label col-form-label">Número do Documento
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" name="number_document"
                                       placeholder="Digite o Nº do documento">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="cnpjContrante" class="control-label col-form-label">Assunto
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" name="subject"
                                       placeholder="Digite um assunto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="tipoContratoId" class="control-label col-form-label">Tipo de Documento <small
                                        class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" name="type_document_id" id="type_document_id">
                                    <option value="">Selecione o tipo</option>
                                    @foreach($tagsDocuments as $tag)
                                        <option value="{{$tag->id}}">{{$tag->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="tipoContratoId" class="control-label col-form-label">Setor <small
                                        class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" name="department_id" id="department_id">
                                    <option value="">Selecione o setor</option>
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <div class="mb-3">
                                <label for="tipoContratoId" class="control-label col-form-label">Responsável <small
                                        class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" name="user_id" id="user_id">
                                    <option value="">Selecione o responsável</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="dataAssinatura" class="control-label col-form-label">Validade
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="date" class="form-control" name="validity"
                                       data-campo="Data de Assinatura" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao">
                        <i class="mdi mdi-folder"></i> Anexos
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-12" id="documento-input">
                            <div class="mb-3">
                                <label for="fileupload" class="control-label col-form-label label-file-contrato">
                                    clique aqui para enviar o documento</label>
                                <input type="file" id="fileupload" name="file[]" multiple class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped color-bordered-table muted-bordered-table m-t-20 text-arquivos table-bordered">
                                    <tbody id="arquivos"></tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="p-3 border-top">
                    <div class="text-end">
                        <button type="submit" class="
                          btn btn-info
                          px-4
                          waves-effect waves-light
                        "
                                id="salvar-contrato-pncp"
                        >
                            <i class="fa fa-check"></i> Salvar Documento
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
