@extends('layouts.app')

@section('title', 'Cadastro Processo | Onlicitação')

@once
    @push('styles')
        <link rel="stylesheet" type="text/css"
              href="{{url('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/css/samples.css')}}">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro Processo</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <form action="{{route('ganho.store', $processId)}}" method="post">
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

                        @if(count($items) > 0)
                            <div class="table-responsive">
                            <table class="table table-striped search-table v-middle">
                                <thead class="header-item">
                                <th>
                                    <div class="n-chk align-self-center text-center">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" class="material-inputs" id="contact-check-all">
                                            <label class="" for="contact-check-all"></label>
                                            <span class="new-control-indicator"></span>
                                        </div>
                                    </div>
                                </th>
                                <th class="text-dark font-weight-bold">Item</th>
                                <th class="text-dark font-weight-bold">Quantidade</th>
                                <th class="text-dark font-weight-bold">Valor Únitario.</th>
                                <th class="text-dark font-weight-bold">Total</th>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <!-- row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" name="items[{{$item->id}}][checked]"
                                                           value="{{$item->id}}" class="material-inputs contact-chkbox"
                                                           id="checkbox{{$item->id}}">
                                                    <label class="" for="checkbox{{$item->id}}"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="ml-2">
                                                    <div class="user-meta-info">
                                                        <h5 class="user-name mb-0"
                                                            data-name="Penelope Baker">{{$item->item}}</h5>
                                                        <span class="font-weight-bold font-12 text-primary">Item {{$item->item_number}} | Lote {{$item->batch_number}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span id="ganho-q{{$item->id}}">{{$item->quantity}}</span>
                                        </td>
                                        <td>
                                            <span class="text-success">
                                                <input type="text" name="items[{{$item->id}}][value]" onkeyup="calcTotalGanho(this, {{$item->id}})" value="{{$item->value}}" />
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-success font-weight-bold" id="ganho-v-total{{$item->id}}">{{$item->total}}</span>
                                        </td>
                                    </tr>
                                    <!-- /.row -->
                                    <input type="hidden" name="items[{{$item->id}}][id]" value="{{$item->id}}"/>
                                    <input type="hidden" name="items[{{$item->id}}][quantity]"
                                           value="{{$item->quantity}}"/>
                                    <input type="hidden" name="items[{{$item->id}}][total]" id="inp-total-ganho{{$item->id}}" value="{{$item->total}}"/>
                                    <input type="hidden" name="processId" value="{{$processId}}"/>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif

                        @if(count($items) === 0)
                            <div>
                                <p>Não há itens para Homologar</p>
                            </div>
                        @endif

                    </div> <!-- end card-body-->
                    <div class="card-footer d-flex gap-10">
                        <a href="{{route('gestao.index')}}" class="btn btn-outline-secondary">
                            <i class="mdi mdi-arrow-left"> Voltar</i>
                        </a>
                        @if(count($items) !== 0)
                        <div class="text-end">
                            <button type="submit" class="
                          btn btn-info
                          px-4
                          waves-effect waves-light
                        "
                                    id="salvar-contrato-pncp"
                            >
                                <i class="fa fa-check"></i> Homologar Itens
                            </button>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/js/pages/ganho/ganho.js')}}"></script>
    @endpush
@endonce
