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
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-body-secondary">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
