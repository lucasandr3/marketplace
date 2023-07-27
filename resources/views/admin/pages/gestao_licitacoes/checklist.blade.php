@extends('layouts.app')

@section('title', 'Checklist Processo')

@once
    @push('styles')
        <link rel="stylesheet" href="{{url('assets/extra-libs/taskboard/css/lobilist.css')}}">
        <link rel="stylesheet" href="{{url('assets/extra-libs/taskboard/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
        <link href="{{url('assets/extra-libs/toastr/dist/build/toastr.min.css')}}" rel="stylesheet">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('gestao.index')}}">Central de Licitações</a></li>
            <li class="breadcrumb-item active">Processo - {{$process->my_number}}</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="card">
            @include('admin.includes.notification')
            <div class="card-body">
                <div id="todo-lists-basic-demo"></div>
            </div>
            <input type="hidden" value="{{csrf_token()}}">
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js')}}"></script>
        <script src="{{url('assets/extra-libs/taskboard/js/jquery-ui.min.js')}}"></script>
        <script src="{{url('assets/extra-libs/taskboard/js/lobilist.js')}}"></script>
        <script src="{{url('assets/extra-libs/taskboard/js/lobibox.min.js')}}"></script>
        <script src="{{url('assets/extra-libs/toastr/dist/build/toastr.min.js')}}"></script>
        <script src="{{url('assets/js/main/pages/central/planer.js')}}"></script>
    @endpush
@endonce
