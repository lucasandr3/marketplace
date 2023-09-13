@extends('layouts.store')

@section('content')
    <div class="d-flexcs" style="align-items: flex-end">
        <div class="">
            <img src="{{url('assets/images/'. $store->logo)}}" alt="{{$store->logo}}" class="img-fluid w-50"
                 style="border:1px solid #eee;margin-right: 10px;width: 350px;border-radius: 5px;"/>
        </div>
        <div class="flex-1">
            <h3>{{$store->name}}</h3>
            <p>{{$store->description}}</p>
            <p class="mb-0">
                <strong>Contato: </strong>
                <span>{{$store->phone}}</span> | <span>{{$store->mobile_phone}}</span>
            </p>
        </div>
    </div>

    <div class="col-md-12 mt-10" style="margin-bottom: 30px">
        <h3>Produtos desta loja</h3>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-sm-4">
                <x-product-item :product="$product"></x-product-item>
            </div>
        @endforeach
    </div>
    <div class="mt-50">
        {!! $products->links() !!}
    </div>
@endsection
