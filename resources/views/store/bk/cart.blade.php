@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Carrinho de Compras</h3>
            <hr>
        </div>
        <div class="col-md-12">
            @if($cart)
                <table class="table table-striped">
                    <thead>
                    <th>Produto:</th>
                    <th>Preço:</th>
                    <th>Quantidade:</th>
                    <th>Subtotal:</th>
                    <th>Ações:</th>
                    </thead>
                    <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($cart as $c)
                        <tr>
                            <td>{{$c['name']}}</td>
                            <td>R$ {{number_format($c['price'], 2, ',', '.')}}</td>
                            <td>{{$c['quantity']}}</td>
                            @php
                                $subtotal = bcmul($c['price'], $c['quantity'], 2);
                                $total += $subtotal;
                            @endphp
                            <td>R$ {{number_format($subtotal, 2, ',', '.')}}</td>
                            <td>
                                <a href="{{route('cart.remove', $c['slug'])}}" class="btn btn-danger btn-sm">REMOVER</a>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3">Total:</td>
                        <td colspan="2">R$ {{number_format($total, 2, ',', '.')}}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <div class="col-md-12">
                    <a href="{{route('checkout')}}" class="btn btn-success">Concluir compra</a>
                    <a href="{{route('cart.cancel')}}" class="btn btn-danger">Cancelar compra</a>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Carrinho vazio...
                </div>
            @endif
        </div>
    </div>
@endsection
