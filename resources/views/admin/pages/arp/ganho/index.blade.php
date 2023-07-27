@extends('layouts.app')

@section('title', 'Cadastro Processo | Onlicitação')

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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro Processo</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <form action="{{route('processos.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body pt-0">

                        <div class="card-header d-flex justify-content-between align-items-center mb-4"
                             style="background-color: rgba(0,0,0,.03);margin-left: -20px;margin-right: -20px;">
                            <h4 class="card-title mb-0 -weight-bold text-dark">
                                <i class="mdi mdi-file-document-box mr-2 text-dark"></i>
                                <span id="contrato-header">Cadastro de Processo</span><br>
                                <small class="ml-1">Informe os dados do processo</small>
                            </h4>
                        </div>

                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Dados do Processo</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" aria-expanded="true"
                                   class="nav-link">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Items</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="home">
                                <div class="card-body">
                                    <h4 class="card-title h4-processo" style="margin-top: -20px;">
                                        <i class="mdi mdi-calendar-clock"></i> Informações do Processo
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="mb-3">
                                                <label for="processo" class="control-label col-form-label">Número do Processo <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="text" class="form-control" name="number" required="true"
                                                       data-campo="Número do Processo" placeholder="Número do processo" value=""
                                                >
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="mb-3">
                                                <label for="anoContrato" class="control-label col-form-label">Ano do Processo <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="text" class="form-control" name="year" required="true"
                                                       data-campo="Ano do Contrato" placeholder="0000" value="2022" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="mb-3">
                                                <label for="processo" class="control-label col-form-label">Número do Processo (Interno) <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="text" class="form-control" name="my_number" required="true"
                                                       data-campo="Número do Processo" placeholder="Número do processo" value=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="anoContrato" class="control-label col-form-label">Data e Hora <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="date" class="form-control" name="init_session" required="true"
                                                       data-campo="Ano do Contrato" placeholder="0000" value="2022" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="anoContrato" class="control-label col-form-label">Quantidade de Itens/Lotes <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="number" class="form-control" name="quantity_itens" required="true"
                                                       placeholder="digite a quantidade de itens/lotes" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <label for="categoriaProcessoId" class="control-label col-form-label">
                                                Modalidade: <small class="text-primary">( obrigatório )</small>
                                            </label>
                                            <div class="mb-3">
                                                <select class="form-control select2" name="modality_id" required="true"
                                                        data-campo="Categoria do Processo" style="width: 100%;">
                                                    <option value="">Selecione</option>
                                                    @foreach($modalities as $modality)
                                                        <option value="{{$modality->id}}">{{$modality->type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <label for="categoriaProcessoId" class="control-label col-form-label">
                                                Plataforma: <small class="text-primary">( obrigatório )</small>
                                            </label>
                                            <div class="mb-3">
                                                <select class="form-control select2" name="platform_id" required="true"
                                                        data-campo="Categoria do Processo" style="width: 100%;">
                                                    <option value="">Selecione</option>
                                                    @foreach($platforms as $platform)
                                                        <option value="{{$platform->id}}">{{$platform->platform}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <label for="categoriaProcessoId" class="control-label col-form-label">
                                                Julgamento: <small class="text-primary">( obrigatório )</small>
                                            </label>
                                            <div class="mb-3">
                                                <select class="form-control select2" name="judgment_id" required="true"
                                                        data-campo="Categoria do Processo" style="width: 100%;">
                                                    <option value="">Selecione</option>
                                                    @foreach($judgments as $judgment)
                                                        <option value="{{$judgment->id}}">{{$judgment->judgment}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title h4-processo">
                                        <i class="fa fa-university"></i> Informações do Orgão
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <label for="cnpjContrante" class="control-label col-form-label">Orgão contratante
                                                <small class="text-primary">( obrigatório )</small>
                                            </label>
                                            <div class="mb-3">
                                                <select class="select2 form-control custom-select"
                                                        name="organ_id"  style="width: 100%;height: 40px;line-height: 40px;">
                                                    <option value="">Selecione</option>
                                                    @foreach($buyers as $buyer)
                                                        <option value="{{$buyer->id}}">{{$buyer->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="cnpjCompra" class="control-label col-form-label">UASG
                                                    <small class="text-primary">( obrigatório )</small></label>
                                                <input type="text" class="form-control" name="uasg" required="true"
                                                       data-campo="CNPJ Orgão Dono da compra" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="anoCompra" class="control-label col-form-label">Cidade <small
                                                        class="text-primary">( obrigatório )</small></label>
                                                <input type="text" class="form-control" id="anoCompra" name="city" required="true"
                                                       data-campo="Ano da Compra" placeholder="Digite o nome da cidade">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <label for="sequencialCompra" class="control-label col-form-label">Estado
                                                <small class="text-primary">( obrigatório )</small></label>
                                            <div class="mb-3">
                                                <select class="form-control select2" name="state" style="width: 100%;">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AP">AP</option>
                                                    <option value="AM">AM</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MT">MT</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MG">MG</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PR">PR</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SP">SP</option>
                                                    <option value="SE">SE</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title h4-processo">
                                        <i class="fa fa-id-card"></i> Informações do Operador
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="niFornecedor" class="control-label col-form-label">Operador
                                                    <small class="text-primary">( obrigatório )</small></label>
                                                <select class="select2 form-control custom-select" name="user_id" required="true"
                                                        data-campo="Categoria do Processo" style="width: 100%;height: 40px;line-height: 40px;">
                                                    <option value="">Selecione o operador</option>
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <label for="tipoPessoaFornecedor" class="control-label col-form-label">Unidade <small
                                                    class="text-primary">( obrigatório )</small></label>
                                            <div class="mb-3">
                                                <select class="form-control select2" id="tipoPessoaFornecedor" name="unit_id" style="width: 100%">
                                                    <option value="">Selecione a unidade</option>
                                                    @foreach($units as $unit)
                                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title h4-processo">
                                        <i class="mdi mdi-file-document-box"></i> Informações do Objeto
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="mb-3">
                                                <label for="objetoContrato" class="control-label col-form-label">Objeto
                                                    <small class="text-primary">( opcional )</small></label>
                                                <textarea class="form-control" cols="80" id="editorTextarea" data-sample="1" rows="3" name="object"
                                                          data-campo="Objeto" aria-invalid="false"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title h4-processo">
                                        <i class="mdi mdi-folder"></i> Documentos
                                    </h4>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <label class="control-label col-form-label">
                                                Tipo de Documento <small class="text-primary">( opcional )</small>
                                            </label>
                                            <div class="mb-3">
                                                <select class="form-control select2" name="type_document_id" required="true"
                                                        data-campo="Tipo de Documento do Contrato" style="width: 100%;">
                                                    <option value="">Selecione o tipo de documento</option>
                                                    @foreach($typeDocuments as $typeDocument)
                                                        <option value="{{$typeDocument->id}}">{{$typeDocument->type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6" id="documento-input">
                                            <div class="mb-3">
                                                <label for="fileupload" class="control-label col-form-label label-file-contrato">
                                                    clique aqui para enviar o documento</label>
                                                <input type="file" name="file[]" multiple class="form-control">
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
                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="card-body">
                                    <div class="repeater-default m-t-30">
                                        <div data-repeater-list="items">
                                            <div data-repeater-item="">
                                                <div class="form-row">
                                                    <div class="form-group col-md-1">
                                                        <label>Item</label>
                                                        <input type="number" name="items[item_number]" class="form-control" placeholder="Item">
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                        <label>Lote</label>
                                                        <input type="number" name="items[batch_number]" class="form-control" value="" placeholder="Lote">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Produto/Serviço</label>
                                                        <input type="text" name="items[item]" class="form-control" placeholder="Produto/Serviço">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label>Valor Unitário</label>
                                                        <input type="text" name="items[value]" class="form-control" id="pwd" placeholder="Valor Unitário">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>Quantidade</label>
                                                        <input type="text" name="items[quantity]" class="form-control" id="pwd" placeholder="Quantidade">
                                                    </div>
                                                    <div class="form-group col-md-1">
                                                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light m-l-10 " type="button" style="margin-top: 20px;">
                                                            <i class="mdi mdi-delete font-18"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <p data-repeater-create="" class="btn btn-info waves-effect waves-light">
                                                <i class="mdi mdi-plus"></i> Adicionar item
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                    <div class="card-footer d-flex gap-10">
                        <a href="{{route('processos.index')}}" class="btn btn-outline-secondary">
                            <i class="mdi mdi-arrow-left"> Voltar</i>
                        </a>
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
                </form>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{url('assets/extra-libs/jquery.repeater/repeater-init.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/samples/js/sample.js')}}"></script>
        <script data-sample="1">
            CKEDITOR.replace('editorTextarea', {
                height: 150
            });
        </script>
    @endpush
@endonce
