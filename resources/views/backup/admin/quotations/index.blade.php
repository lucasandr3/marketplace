@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Cotações</h3>
            <hr>
        </div>
    </div>

    <div class="col-md-12">
        <div class="accordion" id="accordionExample">
            @foreach($quotations as $key => $quotation)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                        Cotação Nº {{$quotation->reference}}
                    </button>
                </h2>
                <div id="collapse{{$key}}" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul class="mb-0">
                            @foreach(filterItensByStoreId(json_decode($quotation->items), $store->id) as $item)
                                <li class="list-group-item"><strong>Produto: </strong>{{$item->name}}</li>
                                <li class="list-group-item"><strong>Preço: </strong>R$ {{number_format($item->price, 2, ',', '.')}}</li>
                                <li class="list-group-item"><strong>Quantidade: </strong>{{$item->quantity}} item(s)</li>
                                <li class="list-group-item"><strong>Total: </strong>R$ {{number_format($item->price * $item->quantity, 2, ',', '.')}}</li>
                            @endforeach
                        </ul>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between">
                            <div><strong>Observação: </strong>{{$quotation->message}}</div>
                            <div>
                                <a href="#" class="btn btn-primary btn-sm">
                                    Responder Cotação <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            {{$quotations->links()}}
        </div>
    </div>
@endsection
