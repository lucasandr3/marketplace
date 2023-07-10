@extends('layouts.app')

@section('content')
    <h1>Lojas</h1>
    @if(!$store) <p><a href="{{route('stores.create')}}" class="btn btn-outline-secondary btn-sm">Criar loja</a></p> @endif
    @include('flash::message')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Loja</th>
            <th>Total de produtos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->name}}</td>
            <td>{{$store->products->count()}}</td>
            <td>
                <div class="btn-group">
                    <a href="{{route('stores.edit', $store->id)}}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{route('stores.destroy', $store->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
@endsection
