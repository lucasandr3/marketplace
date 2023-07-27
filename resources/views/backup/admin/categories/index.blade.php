@extends('layouts.app')

@section('content')
    <h1>Categorias</h1>
    <p><a href="{{route('categories.create')}}" class="btn btn-outline-secondary btn-sm">Criar Categoria</a></p>
    @include('flash::message')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{route('categories.destroy', $category->id)}}" method="post">
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
@endsection
