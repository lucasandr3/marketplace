@extends('layouts.app')

@section('title', 'Processsos | Onlicitação')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">produtos</li>
        </ol>
    </div>
@endsection

@section('css')
    <link href="{{url('assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{url('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="widget-content searchable-container list">
        <div class="card mb-2">
            <div class="card-body">
                <x-filtros route="produtos.filter" :filters="$filters"></x-filtros>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped search-table v-middle">
                        <thead class="header-item bg-info">
                        <tr>
                            <th class="text-light font-weight-bold">Cód.Barras</th>
                            <th class="text-light font-weight-bold">Produto</th>
                            <th class="text-light font-weight-bold">Preço</th>
                            <th class="text-light font-weight-bold">Status</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <!-- row -->
                            <tr class="search-items">
                                <td class="text-center">
                                    <b>{{$product->barcode}}</b>
                                </td>
                                <td class="text-center">
                                    {{$product->name}}
                                </td>
                                <td>
                                    {{$product->price}}
                                </td>
                                <td>
                                    {{$product->bol_active}}
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('produtos.edit', $product->id)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('produtos.show', $product->id)}}" class="btn waves-effect waves-light btn-warning" data-toggle="tooltip" title="Ver">
                                            <i class="mdi mdi-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <!-- /.row -->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                @if (isset($filters))
                    {!! $products->appends($filters)->links() !!}
                @else
                    {!! $products->links() !!}
                @endif
            </div>
        </div>
    </div>

    <div class="modal fade " id="centermodaldesc" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myCenterModalLabel">Descrição do processo</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="body-desc p-1"></div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
@endsection


@section('js')
    <script src="{{url('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
@endsection

