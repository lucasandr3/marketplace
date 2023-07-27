@extends('layouts.app')

@section('title', 'Edição Processo | Onlicitação')

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
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edição Processo</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">

    <div class="col-12">
        <div class="card">
            <form action="{{route('processos.update', $process->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="card-body pt-0">

                <div class="card-header d-flex justify-content-between align-items-center mb-4"
                     style="background-color: rgba(0,0,0,.03);margin-left: -20px;margin-right: -20px;">
                    <h4 class="card-title mb-0 -weight-bold text-dark">
                        <i class="mdi mdi-file-document-box mr-2 text-dark"></i>
                        <span id="contrato-header">Edição de Processo</span><br>
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
                                               value="{{$process->number ?? old('number')}}" placeholder="Número do processo" value=""
                                        >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="anoContrato" class="control-label col-form-label">Ano do Processo <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" name="year" required="true"
                                               value="{{$process->year ?? old('year')}}" placeholder="0000" value="2022" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="processo" class="control-label col-form-label">Número do Processo (Interno) <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" name="my_number" required="true"
                                               value="{{$process->my_number ?? old('my_number')}}" placeholder="Número do processo" value=""
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="anoContrato" class="control-label col-form-label">Data<small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="date" class="form-control" name="init_session" required="true"
                                               value="{{$process->init_session ?? old('init_session')}}" placeholder="0000" value="2022" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="anoContrato" class="control-label col-form-label">Hora<small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="time" class="form-control" name="hour_session" required="true"
                                               data-campo="Ano do Contrato" placeholder="0000" value="{{$process->hour_session ?? old('hour_session')}}" >
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="anoContrato" class="control-label col-form-label">Quantidade de Itens/Lotes <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="number" class="form-control" name="quantity_itens" required="true"
                                               placeholder="digite a quantidade de itens/lotes" value="{{$process->quantity_itens ?? old('quantity_itens')}}" >
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
                                            <optgroup label="Modalidade Atual">
                                                <option value="{{$process->modality_id}}" selected>{{$process->modality->type}}</option>
                                            </optgroup>
                                            <optgroup label="Seleciona uma Modalidade">
                                                @foreach($modalities as $modality)
                                                    <option value="{{$modality->id}}">{{$modality->type}}</option>
                                                @endforeach
                                            </optgroup>
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
                                            <optgroup label="Plataforma Atual">
                                                <option value="{{$process->platform_id}}" selected>{{$process->platform->platform}}</option>
                                            </optgroup>
                                            <optgroup label="Selecione uma plataforma">
                                                @foreach($platforms as $platform)
                                                    <option value="{{$platform->id}}">{{$platform->platform}}</option>
                                                @endforeach
                                            </optgroup>
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
                                            <optgroup label="Julgamento Atual">
                                                <option value="{{$process->judgment_id}}">{{$process->judgment->judgment}}</option>
                                            </optgroup>
                                            <optgroup label="Selecione o julgamento">
                                                @foreach($judgments as $judgment)
                                                    <option value="{{$judgment->id}}">{{$judgment->judgment}}</option>
                                                @endforeach
                                            </optgroup>
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
                                            <optgroup label="Orgão Atual">
                                                <option value="{{$process->organ_id}}" selected>{{$process->organ->name}}</option>
                                            </optgroup>
                                            <optgroup label="Selecione um Orgão">
                                                @foreach($buyers as $buyer)
                                                    <option value="{{$buyer->id}}">{{$buyer->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="cnpjCompra" class="control-label col-form-label">UASG
                                            <small class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" name="uasg" required="true"
                                               value="{{$process->uasg ?? old('uasg')}}" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="mb-3">
                                        <label for="anoCompra" class="control-label col-form-label">Cidade <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <input type="text" class="form-control" id="anoCompra" name="city" required="true"
                                               value="{{$process->city ?? old('city')}}" placeholder="Digite o nome da cidade">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="sequencialCompra" class="control-label col-form-label">Estado
                                        <small class="text-primary">( obrigatório )</small></label>
                                    <div class="mb-3">
                                        <select class="form-control select2" name="state" style="width: 100%;">
                                            <optgroup label="Estado Atual">
                                                <option value="{{$process->state}}" selected>{{$process->state}}</option>
                                            </optgroup>
                                            <optgroup label="Selecione um estado">
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
                                            </optgroup>
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
                                            <optgroup label="Operador Atual">
                                                <option value="{{$process->user_id}}" selected>{{$process->user->name}}</option>
                                            </optgroup>
                                            <optgroup label="Selecione o operador">
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="tipoPessoaFornecedor" class="control-label col-form-label">Unidade <small
                                            class="text-primary">( obrigatório )</small></label>
                                    <div class="mb-3">
                                        <select class="form-control select2" id="tipoPessoaFornecedor" name="unit_id" style="width: 100%">
                                            <optgroup label="Unidade Atual">
                                                <option value="{{$process->unit_id}}" selected>{{$process->unit->name}}</option>
                                            </optgroup>
                                            <optgroup label="Seleciona a unidade">
                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                @endforeach
                                            </optgroup>
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
                                                  data-campo="Objeto" aria-invalid="false">
                                            {{$process->object}}
                                        </textarea>
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
                                                style="width: 100%;">
                                            <option value="{{$edital->type_id}}">{{$edital->type}}</option>
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
                                        <table class="table table-striped table-bordered muted-bordered-table m-t-20">
                                            <tbody>
                                            @foreach($process->documents as $document)
                                                <tr>
                                                    <td>
                                                        <a href="{{$process->link}}" download><i class="fa fa-download"></i> {{$document->name}}</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href=""><i class="mdi mdi-delete text-danger font-18" title="Remover arquivo"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
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
                                    @foreach($process->items as $item)
                                    <div data-repeater-item="{{$item->id}}">
                                        <div class="form-row">
                                                <div class="form-group col-md-1">
                                                    <label>Item:</label>
                                                    <input type="number" name="items[item_number]" value="{{$item->item_number}}" class="form-control" placeholder="Item">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <label>Lote:</label>
                                                    <input type="number" name="items[batch_number]" class="form-control" value="{{$item->batch_number}}" placeholder="Lote">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Produto/Serviço:</label>
                                                    <input type="text" name="items[item]" value="{{$item->item}}" class="form-control" placeholder="Produto/Serviço">
                                                </div>
                                            <div class="form-group col-md-1">
                                                <label>Und:</label>
                                                <input type="text" name="items[unit]" class="form-control" value="{{$item->unit}}" placeholder="Unidade">
                                            </div>
                                                <div class="form-group col-md-2">
                                                    <label>Valor Unitário:</label>
                                                    <input type="text" name="items[value]" value="{{$item->value}}" class="form-control" id="pwd" placeholder="Valor Unitário">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Quantidade:</label>
                                                    <input type="text" name="items[quantity]" value="{{$item->quantity}}" class="form-control" id="pwd" placeholder="Quantidade">
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light m-l-10 " type="button" style="margin-top: 20px;">
                                                        <i class="mdi mdi-delete font-18"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        <hr>
                                    </div>
                                    @endforeach
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
                        ">
                        <i class="fa fa-check"></i> Salvar Alterações
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
