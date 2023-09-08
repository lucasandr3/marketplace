@extends('layouts.store')

@section('content')
        <div class="row">
            <x-product-single :product="$product"></x-product-single>
        </div>
@endsection
