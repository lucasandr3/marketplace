@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-6">
            @if($product->images()->count())
                <img src="{{asset("storage/".$product->images()->first()->image)}}" alt="" class="card-img-top img-fluid" />
            @else
                <img src="{{asset('assets/images/nophoto3.png')}}" alt="" class="card-img-top img-fluid" />
            @endif
            <div class="row mt-3">
                @foreach($product->images as $image)
                    <div class="col-md-4">
                        <img src="{{asset("storage/".$image->image)}}" alt="" class="img-fluid" />
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-12">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
                <h3>R$ {{number_format($product->price, 2, ',', '.')}}</h3>
                <span>{{$product->store->name}}</span>
            </div>
            <div class="product-add col-md-12">
                <hr>
                <form action="{{route('cart.add')}}" method="post">
                    @csrf
                    <input type="hidden" name="product[name]" value="{{$product->name}}">
                    <input type="hidden" name="product[price]" value="{{$product->price}}">
                    <input type="hidden" name="product[slug]" value="{{$product->slug}}">
                    <div class="form-group">
                        <label class="mb-1">Quantidade:</label>
                        <input type="number" name="product[quantity]" value="1" class="form-control" style="width: 20%" />
                    </div>
                    <button class="btn btn-success mt-2">Comprar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
            {{$product->body}}
        </div>
    </div>
@endsection
