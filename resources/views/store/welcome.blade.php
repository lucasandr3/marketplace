@extends('layouts.store')

@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-4">
            <x-product-item :product="$product"></x-product-item>
        </div>
        @endforeach
    </div>

    {!! $products->links() !!}
{{--    @if (isset($filters))--}}
{{--        {!! $categories->appends($filters)->links() !!}--}}
{{--    @else--}}
{{--        {!! $categories->links() !!}--}}
{{--    @endif--}}
@endsection
