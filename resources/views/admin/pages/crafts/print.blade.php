@extends('layouts.app')

@section('title', 'Ofícios')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('oficios.index')}}">Ofícios</a></li>
            <li class="breadcrumb-item active">{{$craft->number}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="papper">
                <div class="papper-a4">
                    <div class="papper-body">
                        {!! $craft->craft !!}
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route('oficios.index')}}" class="btn btn-outline-secondary"><i class="mdi mdi-arrow-left"></i> Voltar</a>
                <a href="javascript:window.print()" class="btn btn-info"><i class="mdi mdi-printer"></i> Imprimir</a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{url('assets/js/pages/contact/contact.js')}}"></script>
@endsection
