@extends('layouts.store')

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-md-12">
            <h3>{{$department->name_department}}</h3>
            <hr>
        </div>
            <div class="row">
                @forelse($products as $product)
                <div class="col-sm-4">
                    <x-product-item :product="$product"></x-product-item>
                </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            Nenhum produto encontrado para esta categoria.
                        </div>
                    </div>
                @endforelse
            </div>

            {{--    @if (isset($filters))--}}
            {{--        {!! $categories->appends($filters)->links() !!}--}}
            {{--    @else--}}
            {{--        {!! $categories->links() !!}--}}
            {{--    @endif--}}
            <div class="mt-30">
                {!! $products->links() !!}
            </div>
    </div>
@endsection
