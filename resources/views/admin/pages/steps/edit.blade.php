@extends('layouts.app')

@section('title', 'Tarefas')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('steps.index')}}">Planer</a></li>
            <li class="breadcrumb-item active">Edição de Tarefa</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{route('steps.update', $step->id)}}">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$step->step}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-pencil-alt"></i></span>
                            </div>
                            <input type="text" class="form-control bagde" placeholder="Digite o nome da tarefa"
                                   aria-label="name" aria-describedby="basic-addon1" name="step"
                                   value="{{ $step->step ?? old('step') }}" required autocomplete="name" autofocus>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-exchange-alt"></i></span>
                            </div>

                            <select class="form-control" name="bol_active">
                                @if($step->bol_active)
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                @else
                                    <option value="0">Inativo</option>
                                    <option value="1">Ativo</option>
                                @endif
                            </select>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('steps.index')}}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left"></i> Descartar
                        </a>
                        <button type="submit" class="btn btn-info">
                            <i class="fa fa-check"></i> Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
