@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Cotação</h3>
            <hr>
        </div>
        <div class="col-md-12">
            @if($quotation)
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
                    @foreach($quotation as $q)
                        <tr>
                            <td>{{$q['name']}}</td>
                            <td>R$ {{number_format($q['price'], 2, ',', '.')}}</td>
                            <td>{{$q['quantity']}}</td>
                            @php
                                $subtotal = bcmul($q['price'], $q['quantity'], 2);
                                $total += $subtotal;
                            @endphp
                            <td>R$ {{number_format($subtotal, 2, ',', '.')}}</td>
                            <td>
                                <a href="{{route('cart.remove', $q['slug'])}}" class="btn btn-danger btn-sm">REMOVER</a>
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
                    <a href="{{route('checkout.quotation')}}" class="btn btn-success">Concluir cotação</a>
                    <a href="{{route('quotation.cancel')}}" class="btn btn-danger">Cancelar cotação</a>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Você não tem cotação...
                </div>
            @endif
        </div>
    </div>
@endsection
