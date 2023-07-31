@extends('layouts.app')

@section('title', "Processo - {$process->number}")

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('processos.index')}}">Processos</a></li>
            <li class="breadcrumb-item active">Processo - {{$process->number}}</li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="row">

        <div class="col-12">
            <div class="card">
                    <div class="card-body pt-0">

                        <div class="card-header d-flex justify-content-between align-items-center mb-4"
                             style="background-color: rgba(0,0,0,.03);margin-left: -20px;margin-right: -20px;">
                            <h4 class="card-title mb-0 -weight-bold text-dark">
                                <i class="mdi mdi-file-document-box mr-2 text-dark"></i>
                                <span id="contrato-header">Detalhes de Processo</span><br>
                                <small class="ml-1">Processo - {{$process->my_number}}</small>
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
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Informações Data e Hora do Processo</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Número:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->number}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Qtd. Items:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->quantity_itens}} Item(s) </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Ano:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->year}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Nº. Interno:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->my_number}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Data da Disputa:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{\Carbon\Carbon::parse($process->init_session)->format('d/m/Y - H:i')}}  </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Modalidade:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->modality->type}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Plataforma:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->platform->platform}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Julgamento:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->judgment->judgment}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Informações do Orgão</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Orgão:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->organ->name}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">UASG:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->uasg}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Cidade:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->city}} - {{$process->state}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Informações do Operador</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Operador:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{$process->user->name}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Informações do Objeto</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Objeto:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {!! $process->object ?? 'Não Informado' !!} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Documentos</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-striped muted-bordered-table table-bordered m-t-20">
                                                    <tbody>
                                                    @foreach($process->documents as $document)
                                                        <tr>
                                                            <td>
                                                                <a href="{{$process->link}}" download><i class="fa fa-download"></i> {{$document->name}}</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Histórico</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Data de Cadastro:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{\Carbon\Carbon::parse($process->created_at)->format('d/m/Y - H:i')}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3 font-weight-bold">Última Atualização:</label>
                                                    <div class="col-md-9">
                                                        <p class="form-control-static"> {{\Carbon\Carbon::parse($process->updated_at)->format('d/m/Y - H:i')}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="table-responsive">
                                    <table class="table table-striped search-table v-middle">
                                        <thead class="header-item bg-info">
                                        <tr>
                                            <th class="text-light font-weight-bold">Nº. Item</th>
                                            <th class="text-light font-weight-bold">Nº Lote</th>
                                            <th class="text-light font-weight-bold">Item</th>
                                            <th class="text-light font-weight-bold">Und</th>
                                            <th class="text-light font-weight-bold">Quantidade</th>
                                            <th class="text-light font-weight-bold">Valor Únit.</th>
                                            <th class="text-light font-weight-bold">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($process->items as $item)
                                            <!-- row -->
                                            <tr class="search-items">
                                                <td>
                                                    {{$item->item_number}}
                                                </td>
                                                <td>
                                                    {{$item->batch_number}}
                                                </td>
                                                <td>
                                                    {{$item->item}}
                                                </td>
                                                <td>
                                                    {{$item->unit}}
                                                </td>
                                                <td>
                                                    {{$item->quantity}}
                                                </td>
                                                <td>
                                                    {{$item->value}}
                                                </td>
                                                <td class="font-weight-bold">
                                                    {{$item->total}}
                                                </td>
                                            </tr>
                                            <!-- /.row -->
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                    <div class="card-footer d-flex">
                        <a href="{{route('processos.index')}}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Voltar</a>
                        <form method="post" action="{{route('processos.destroy', $process->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-2"><i class="fa fa-trash"></i> Cancelar Processo</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
