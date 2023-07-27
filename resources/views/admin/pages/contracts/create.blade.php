@extends('layouts.app')

@section('title', 'Contratos')

@once
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/css/samples.css')}}">
    @endpush
@endonce

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
        <div>
            <form action="{{route('contratos.store')}}" method="post">
                <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center"
                     style="background-color: rgba(0,0,0,.03);">
                    <h4 class="card-title mb-0 -weight-bold text-dark">
                        <i class="fa fa-filter mr-2 text-dark"></i>
                        <span id="contrato-header">Cadastro de Contrato</span><br>
                        <small class="ml-1">Informe os dados do contrato</small>
                    </h4>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao"><i class="fa fa-university"></i> Informações do Orgão</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="cnpjContrante" class="control-label col-form-label">CNPJ Orgão contratante
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="cnpjContrante"
                                       placeholder="00.000.000/0000-00">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="cnpjCompra" class="control-label col-form-label">CNPJ Orgão Dono da compra
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="cnpjCompra" required="true"
                                       data-campo="CNPJ Orgão Dono da compra" placeholder="00.000.000/0000-00">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="anoCompra" class="control-label col-form-label">Ano da Compra <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="anoCompra" required="true"
                                       data-campo="Ano da Compra" placeholder="0000">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="sequencialCompra" class="control-label col-form-label">Número da Compra
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="sequencialCompra" required="true"
                                       data-campo="Número da Compra PNCP"
                                       placeholder="Número da compra">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao">
                        <i class="mdi mdi-file-document-box"></i> Informações Iniciais do Contrato
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="tipoContratoId" class="control-label col-form-label">Tipo de Contrato <small
                                        class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" name="" id="tipoContratoId">
                                    <option value="1">Contrato (Termo Inicial)</option>
                                    <option value="12">Carta Contrato</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="numeroContratoEmpenho" class="control-label col-form-label">Número do
                                    Contrato no sistema de origem <small class="text-primary">( obrigatório
                                        )</small></label>
                                <input type="text" class="form-control" id="numeroContratoEmpenho" required="true"
                                       data-campo="Número do Contrato no sistema de origem"
                                       placeholder="Número do contrato ou empenho com força de contrato no sistema de origem">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="anoContrato" class="control-label col-form-label">Ano do Contrato <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="anoContrato" required="true"
                                       data-campo="Ano do Contrato" placeholder="0000" value="2022" >
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="processo" class="control-label col-form-label">Número do Processo <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="processo" required="true"
                                       data-campo="Número do Processo" placeholder="Número do processo" value="123"
                                       >
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="categoriaProcessoId" class="control-label col-form-label">Categoria do
                                    Processo <small class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" id="categoriaProcessoId" required="true"
                                        data-campo="Categoria do Processo">
                                    <option value="">Selecione</option>
                                    <option value="1">Cessão</option>
                                    <option value="2" selected>Compras</option>
                                    <option value="3">Informática (TIC)</option>
                                    <option value="4">Internacional</option>
                                    <option value="5">Locação de Imóveis</option>
                                    <option value="6">Mão de Obra</option>
                                    <option value="7">Obras</option>
                                    <option value="8">Serviços</option>
                                    <option value="9">Serviços de Engenharia</option>
                                    <option value="10">Serviços de Saúde</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao"><i class="fa fa-id-card"></i> Informações do Fornecedor</h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label for="niFornecedor" class="control-label col-form-label">Doc. Fornecedor
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="niFornecedor" required="true"
                                       data-mask="00.000.000/0000-00"
                                       data-campo="Documento Fornecedor" placeholder="00.000.000/0000-00">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="nomeRazaoSocialFornecedor" class="control-label col-form-label">Razão Social
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="nomeRazaoSocialFornecedor" required="true"
                                       data-campo="Razão Social" placeholder="Razão social">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="mb-3">
                                <label for="tipoPessoaFornecedor" class="control-label col-form-label">Natureza <small
                                        class="text-primary">( obrigatório )</small></label>
                                <select class="form-control" id="tipoPessoaFornecedor">
                                    <option value="PJ">Pessoa Jurídica</option>
                                    <option value="PF">Pessoa Física</option>
                                    <option value="PE">Pessoa Estrangeira</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao">
                        <i class="mdi mdi-file-document-box"></i> Informações do Contrato
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="objetoContrato" class="control-label col-form-label">Objeto <small
                                        class="text-primary">( obrigatório )</small></label>
                                <textarea class="form-control" cols="80" id="editorTextarea" data-sample="1" rows="3" id="objetoContrato" required="true"
                                          data-campo="Objeto" aria-invalid="false"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="informacaoComplementar" class="control-label col-form-label">Informações
                                    Complementares</label>
                                <textarea class="form-control" rows="3" id="informacaoComplementar"
                                          placeholder="Preencha este campo, caso exista alguma informação complementar"
                                          aria-invalid="false"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="valorInicial" class="control-label col-form-label">Valor Inicial <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="valorInicial" required="true"
                                       data-campo="Valor Inicial"
                                       placeholder="Precisão de 4 dígios decimais Ex: 100.0000"/>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="numeroParcelas" class="control-label col-form-label">Número de Parcelas
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="number" class="form-control" id="numeroParcelas" required="true"
                                       data-campo="Número de Parcelas" value="1" min="1"
                                       placeholder="Número de parcelas Ex: 2">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="valorParcela" class="control-label col-form-label">Valor da Parcela <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="valorParcela" required="true"
                                       data-campo="Valor da Parcela"
                                       placeholder="Precisão de 4 dígios decimais Ex: 50.0000" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="valorGlobal" class="control-label col-form-label">Valor Global <small
                                        class="text-primary">( obrigatório )</small></label>
                                <input type="text" class="form-control" id="valorGlobal" required="true"
                                       data-campo="Valor Global"
                                       placeholder="Precisão de 4 dígios decimais Ex: 100.0000" >
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label for="valorAcumulado" class="control-label col-form-label">Valor Acumulado</label>
                                <input type="text" class="form-control" id="valorAcumulado"
                                       placeholder="Precisão de 4 dígios decimais Ex: 100.0000">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao">
                        <i class="mdi mdi-calendar-clock"></i>
                        Informações de Data do Contrato
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="dataAssinatura" class="control-label col-form-label">Data de Assinatura
                                    <small class="text-primary">( obrigatório )</small></label>
                                <input type="date" class="form-control" id="dataAssinatura" required="true"
                                       data-campo="Data de Assinatura" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="dataVigenciaInicio" class="control-label col-form-label">Data de início de
                                    vigência <small class="text-primary">( obrigatório )</small></label>
                                <input type="date" class="form-control" id="dataVigenciaInicio" required="true"
                                       data-campo="Data de início de vigência" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="mb-3">
                                <label for="dataVigenciaFim" class="control-label col-form-label">Data do término da
                                    vigência <small class="text-primary">( obrigatório )</small></label>
                                <input type="date" class="form-control" id="dataVigenciaFim" required="true"
                                       data-campo="Data do término da vigência" placeholder="dd/mm/aaaa">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <h4 class="card-title titulo-secao">
                        <i class="mdi mdi-folder"></i> Documentos
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-3">
                                <label class="control-label col-form-label">Tipo de Documento</label>
                                <select class="form-control" id="tipo-documento-contrato" required="true"
                                        data-campo="Tipo de Documento do Contrato">
                                    <option value="12">Contrato</option>
                                    <option value="17">Nota de Empenho</option>
                                    <option value="16">Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6" id="documento-input">
                            <div class="mb-3">
                                <label for="fileupload" class="control-label col-form-label label-file-contrato">
                                    clique aqui para enviar o documento</label>
                                <input type="file" id="fileupload" name="files[]" multiple class="form-control">
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
                            <i class="fa fa-check"></i> Salvar Contrato
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/libs/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/samples/js/sample.js')}}"></script>
        <script data-sample="1">
            CKEDITOR.replace('editorTextarea', {
                height: 150
            });
        </script>
    @endpush
@endonce
