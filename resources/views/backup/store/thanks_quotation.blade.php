@extends('layouts.front')

@section('content')
    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h3 class="display-7 fw-bold text-body-emphasis mb-4">Obrigado por sua cotação</h3>
            <div class="col-lg-6 mx-auto">
                <div class="alert alert-success mb-4" role="alert">
                    <p class="mb-0">Seu pedido foi processado, código do pedido:</p>
                    <span>{{request()->get('order')}}</span>
                </div>
            </div>
        </div>
    </main>
@endsection
