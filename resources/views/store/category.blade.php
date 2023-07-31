@extends('layouts.front')

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-md-12">
            <h3>{{$category->name}}</h3>
            <hr>
        </div>
        @forelse($category->products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    @if($product->images()->count())
                        <img src="{{asset("storage/".$product->images()->first()->image)}}" alt=""
                             class="card-img-top image-product"/>
                    @else
                        <img src="{{asset('assets/images/nophoto3.png')}}" alt=""
                             class="card-img-top image-product"/>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <h4>R$ {{number_format($product->price, 2, ',', '.')}}</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('product.single', $product->slug)}}"
                                   class="btn btn-sm btn-success">Ver produto</a>
                            </div>
                            <small class="text-body-secondary">{{$product->store()->first()->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    Nenhum produto encontrado para esta categoria.
                </div>
            </div>
        @endforelse
    </div>
@endsection
