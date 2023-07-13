@extends('layouts.front')

@section('content')
    {{--    <div class="row">--}}
    {{--        <div class="col-md-4">--}}
    {{--    @foreach($products as $product)--}}
    {{--                <div class="card">--}}
    {{--                    @if($product->photos)--}}
    {{--                        <img src="{{asset("storage/".$product->photos()->first()->image)}}" alt="" class="card-img-top" />--}}
    {{--                    @endif--}}
    {{--                    <div class="card-body">--}}
    {{--                        <h2 class="card-title">{{$product->name}}</h2>--}}
    {{--                        <p class="card-text">{{$product->description}}</p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--    @endforeach--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                    @if($product->images()->count())
                        <img src="{{asset("storage/".$product->images()->first()->image)}}" alt="" class="card-img-top image-product" />
                    @else
                        <img src="{{asset('assets/images/nophoto3.png')}}" alt="" class="card-img-top image-product" />
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <h4>R$ {{number_format($product->price, 2, ',', '.')}}</h4>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('product.single', $product->slug)}}" class="btn btn-sm btn-success">Ver produto</a>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
