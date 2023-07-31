@extends('layouts.app')

@section('title', 'Produtos Pedido')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pedidos</li>
            <li class="breadcrumb-item active">Produtos</li>
        </ol>
    </div>
@endsection

@section('content')
    <section>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="text-center" style="background-color: #1269db;color: #ffffff;border-top-left-radius: 5px;border-bottom-left-radius: 5px;">Totais</th>
                <th class="text-center" style="background-color: #1269db;color: #ffffff;"><strong>0</strong></th>
                <th class="text-center" style="background-color: #1269db;color: #ffffff;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"><strong>0,00</strong></th>
            </tr>
            </thead>
        </table>
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped search-table v-middle mb-0">
                        <thead class="header-item bg-info">
                        <tr>
                            <th class="text-light font-weight-bold">Produto</th>
                            <th class="text-light font-weight-bold">Preço</th>
                            <th class="text-light font-weight-bold">Quantidade</th>
                            <th class="text-light font-weight-bold text-right">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($produtos as $product)
                            <!-- row -->
                            <tr class="search-items">
                                <td>
                                    {{$product->name}}
                                </td>
                                <td>
                                    R$ {{number_format($product->price, 2, ',', '.')}}
                                </td>
                                <td>
                                    <span class="">{{$product->quantity}}</span>
                                </td>
                                <td class="text-right">
                                    <div class="action-btn">
                                        <a href="{{route('products.edit', $product->slug)}}"
                                           class="btn waves-effect waves-light btn-info" data-toggle="tooltip" title="Editar produto">
                                            <i class="mdi mdi-pen"></i>
                                        </a>
                                        <a href="{{route('products.show', $product->slug)}}" class="btn waves-effect waves-light btn-warning" data-toggle="tooltip" title="Ver">
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
{{--                @if (isset($filters))--}}
{{--                    {!! $produtos->appends($filters)->links() !!}--}}
{{--                @else--}}
{{--                    {!! $produtos->links() !!}--}}
{{--                @endif--}}
            </div>
        </div>
    </section>
@endsection
