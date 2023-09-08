@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Meus Pedidos</h3>
            <hr>
        </div>
    </div>

    <div class="col-md-12">
        <div class="accordion" id="accordionExample">
            @foreach($orders as $key => $order)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                        Pedido Nº {{$order->reference}}
                    </button>
                </h2>
                <div id="collapse{{$key}}" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul class="mb-0">
                            @foreach(json_decode($order->items) as $item)
                                <h5><strong>{{$order->stores()->first()->name}}</strong></h5>
                                <div class="ms-3 mb-3">
                                    <li class="list-group-item"><strong>Produto: </strong>{{$item->name}}</li>
                                    <li class="list-group-item"><strong>Preço: </strong>R$ {{number_format($item->price, 2, ',', '.')}}</li>
                                    <li class="list-group-item"><strong>Quantidade: </strong>{{$item->quantity}} item(s)</li>
                                    <li class="list-group-item"><strong>Total: </strong>R$ {{number_format($item->price * $item->quantity, 2, ',', '.')}}</li>
                                </div>
                                @php
                                    $total = 0;
                                    $subtotal = bcmul($item->price, $item->quantity, 2);
                                    $total += $subtotal;
                                @endphp
                            @endforeach
                        </ul>
                        <p class="mb-0"><strong>Subtotal: </strong>R$ {{number_format($subtotal, 2 , ',','.')}}</p>
                        <p><strong>Total: </strong>R$ {{number_format($total, 2 , ',','.')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            {{$orders->links()}}
        </div>
    </div>
@endsection
