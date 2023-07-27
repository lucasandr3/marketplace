@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Minhas Notificações</h3>
            <hr>
        </div>
    </div>

    @if(!$notifications)
        <div class="mt-5">
            <p>Você ainda não possui nenhuma notificação</p>
        </div>
    @else
        <p><a href="{{route('notifications.readall')}}" class="btn btn-outline-success btn-sm">Marcar todas como lida(s)</a></p>
        @include('flash::message')
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Notificação</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($notifications as $notification)
                <tr>
                    <td>{{$notification->data['message']}}</td>
                    <td>{{$notification->created_at->locale('pt')->diffForHumans()}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('notifications.read', $notification['id'])}}" class="btn btn-primary btn-sm">
                                <i class="fa fa-check"></i> Marcar como lida
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
