@extends('layouts.app')

@section('content')
    <h1>Produtos</h1>
    <p><a href="{{route('products.create')}}" class="btn btn-outline-secondary btn-sm">Criar Produto</a></p>
    @include('flash::message')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
             <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>R$ {{number_format($product->price, 2, ',', '.')}}</td>
                <td>{{$product->store()->first()->name}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{$products->links()}}
@endsection
