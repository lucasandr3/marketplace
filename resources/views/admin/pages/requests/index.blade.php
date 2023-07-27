@extends('layouts.app')

@section('title', 'Pedidos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Pedidos</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="card-title">Meus Tickets</h4>
                    <a href="{{route('pedidos.create')}}" class="btn btn-info">
                        Novo Pedido <i class="mdi mdi-arrow-right"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="p-2 rounded bg-info text-center">
                                    <h1 class="font-light text-white">{{$total}}</h1>
                                    <h6 class="text-white">Total de Tickets</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="p-2 rounded bg-primary text-center">
                                    <h1 class="font-light text-white">0</h1>
                                    <h6 class="text-white">Respondidos</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="p-2 rounded bg-success text-center">
                                    <h1 class="font-light text-white">{{$resolveds}}</h1>
                                    <h6 class="text-white">Resolvidos</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="p-2 rounded bg-dark text-center">
                                    <h1 class="font-light text-white">{{$pendents}}</h1>
                                    <h6 class="text-white">Pendentes</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Assunto</th>
                                <th>ID</th>
                                <th>De Onde</th>
                                <th>Autor</th>
                                <th>Data</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>
                                        <span class="{{$ticket->status->class}}">{{$ticket->status->label}}</span>
                                    </td>
                                    <td>
                                        <a href="{{route('pedidos.show', $ticket->id)}}" class="font-medium link">
                                            {{$ticket->subject}}
                                        </a>
                                    </td>
                                    <td><a href="{{route('pedidos.show', $ticket->id)}}" class="font-bold link">{{$ticket->identify}}</a></td>
                                    <td>{{$ticket->unit->name}}</td>
                                    <td>{{$ticket->author->name}}</td>
                                    <td>{{$ticket->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    @if(!empty($pagination))
                        <x-paginacao :data='$pagination'></x-paginacao>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{url('assets/js/pages/contact/contact.js')}}"></script>
@endsection
