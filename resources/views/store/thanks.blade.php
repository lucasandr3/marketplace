@extends('layouts.store')

@section('content')
    <main class="row">
        <div class="px-4 py-5 my-5 text-center">
            <h3 class="display-7 fw-bold text-body-emphasis mb-4">Obrigado por sua compra</h3>
            <div class="col-lg-12 mx-auto">
                <div class="alert alert-success mb-4 mt-50" role="alert">
                    <p class="mb-0">Seu pedido foi processado, código do pedido:</p>
                    <span>{{request()->get('order')}}</span>
                </div>
            </div>
        </div>
    </main>
@endsection

