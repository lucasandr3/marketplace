@extends('layouts.app')

@section('title', 'Cotações')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pedidos</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="widget-content searchable-container list">

        <div class="card card-body mb-0">
            <form action="#" method="post">
                @csrf
                <div class="mb-2 p-2">
                    <div class="row mb-3">
                        <div class="flex-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title font-weight-bold text-dark mb-0">
                                        <i class="mdi mdi-receipt mr-2 text-dark"></i>
                                        Meus pedidos<br>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group">
                            <input type="text" class="form-control col-10"
                                   style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                                   placeholder="Digite o código do pedido" value="{{$filters['term'] ?? ''}}"
                                   name="term">

                            <div class="input-group-append ml-1">
                                <button type="submit" style="height: 60px !important;width: 100%; border-radius: 5px;"
                                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                                    APLICAR FILTRO
                                </button>
                            </div>
                            {{--                            <div class="input-group-append ml-1">--}}
                            {{--                                <a href="{{route('categories.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >--}}
                            {{--                                    Cadastrar Categoria <i class="mdi mdi-arrow-right font-16 mr-1"></i>--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="card">
            <div class="card-body p-0">
                {{--                <div class="table-responsive">--}}
                {{--                    <table class="table table-striped search-table v-middle">--}}
                {{--                        <thead class="header-item bg-info">--}}
                {{--                        <tr>--}}
                {{--                            <th class="text-light font-weight-bold">Categoria</th>--}}
                {{--                            <th class="text-light font-weight-bold">QTDE. produtos cadastrados</th>--}}
                {{--                            <th class="text-light font-weight-bold text-right">Ações</th>--}}
                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}
                {{--                        @foreach($categories as $category)--}}
                {{--                            <!-- row -->--}}
                {{--                            <tr class="search-items">--}}
                {{--                                <td>--}}
                {{--                                    {{$category->name}}--}}
                {{--                                </td>--}}
                {{--                                <td>--}}
                {{--                                    {{$category->products()->count()}}--}}
                {{--                                </td>--}}
                {{--                                <td class="text-right">--}}
                {{--                                    <div class="action-btn">--}}
                {{--                                        <a href="{{route('categories.edit', $category->id)}}"--}}
                {{--                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip"--}}
                {{--                                           title="Editar">--}}
                {{--                                            <i class="mdi mdi-pen"></i>--}}
                {{--                                        </a>--}}
                {{--                                        <form action="{{route('categories.destroy', $category->id)}}" method="post" style="display: inline-flex;">--}}
                {{--                                            @csrf--}}
                {{--                                            @method('DELETE')--}}
                {{--                                            <button type="submit" class="btn btn-danger" data-toggle="tooltip"--}}
                {{--                                                    title="Excluir"><i class="mdi mdi-delete"></i></button>--}}
                {{--                                        </form>--}}
                {{--                                    </div>--}}
                {{--                                </td>--}}
                {{--                            </tr>--}}
                {{--                            <!-- /.row -->--}}
                {{--                        @endforeach--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}
                {{--                </div>--}}

                <div class="col-md-12 mb-4">
                    <div>
                        <input type="checkbox" class="material-inputs" id="checkbox_todos"/>
                        <label class="mb-0" for="checkbox_todos">Marcar Todos</label>
                    </div>
                </div>

                <div class="col-md-12">
                    <div id="accordion" class="custom-accordion">
                        @foreach($orders as $key => $order)
                            <div class="card mb-2 border-acord">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1 d-flex align-items-center">
                                                <input type="checkbox" class="material-inputs" id="checkbox_{{$key}}"/>
                                                <label class="" for="checkbox_{{$key}}"></label>
                                                <a class="custom-accordion-title text-dark d-block pt-2 pb-2 collapsed"
                                                   data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="false"
                                                   aria-controls="collapse{{$key}}">
                                                    Pedido Nº {{$order->reference}}
                                                </a>
                                            </div>
                                            <div>
                                                <span class="float-right"><i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i></span>
                                            </div>
                                        </div>
                                    </h5>
                                </div>
                                <div id="collapse{{$key}}" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            @foreach(filterItensByStoreId(json_decode($order->items), $store->id) as $item)
                                                <li class="list-group-item"><strong>Produto: </strong>{{$item->name}}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Preço: </strong>R$ {{number_format($item->price, 2, ',', '.')}}
                                                </li>
                                                <li class="list-group-item">
                                                    <strong>Quantidade: </strong>{{$item->quantity}} item(s)
                                                </li>
                                                <li class="list-group-item radius-none">
                                                    <strong>Total: </strong>R$ {{number_format($item->price * $item->quantity, 2, ',', '.')}}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div
                                            class="d-flex align-items-center justify-content-between footer-accordion radius-bottom-4">
                                            <div>
                                                <a href="#" class="btn btn-secondary">
                                                    Ver Produtos <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                @if (isset($filters))
                    {!! $orders->appends($filters)->links() !!}
                @else
                    {!! $orders->links() !!}
                @endif
            </div>
        </div>
    </div>
@endsection
