@extends('layouts.app')

@section('title', "Detalhes do Pedido")

@once
    @push('styles')
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/css/samples.css')}}">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('planos.index')}}">Unidades</a></li>
{{--            <li class="breadcrumb-item active">{{$unit->name}}</li>--}}
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$ticket->subject}}</h4>
                    {!! $ticket->body !!}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Respostas</h4>
                    <ul class="list-unstyled mt-5">
                        @foreach($ticket->replies as $reply)
                        <li class="media">
                            <i class="mdi mdi-account-check font-24 mr-3"></i>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">{{$reply->user->name}}</h5>
                                {!! $reply->reply !!}
                            </div>
                        </li>
                        @if($ticket->replies->count() > 0)
                            <hr>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            @if($ticket->status->label !== 'Fechado')
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Escreva uma resposta</h4>
                    <form method="post" action="{{route('pedidos.reply', $ticket->id)}}">
                        @csrf
                        <textarea class="form-control" cols="80" id="editorTextarea" data-sample="1" rows="3" name="reply"
                                  data-campo="Objeto" aria-invalid="false"></textarea>
                        <button type="submit" class="mt-3 btn waves-effect waves-light btn-success">
                            <i class="mdi mdi-send"></i> Responder
                        </button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações do Ticket</h4>
                </div>
                <div class="card-body bg-light">
                    <div class="row text-center">
                        <div class="col-6 mt-2 mb-2">
                            <span class="{{$ticket->status->class}}">
                                {{$ticket->status->label}}
                            </span>
                        </div>
                        <div class="col-6 mt-2 mb-2">
                            {{$ticket->created_at}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="pt-3">Autor do Ticket</h5>
                    <span>{{$ticket->author->name}}</span>
                    <h5 class="mt-4">Colaborador</h5>
                    <span>{{$ticket->agent->name}}</span>
                    <br/><br/>
                    <form action="{{route('pedidos.status', $ticket->id)}}" method="post">
                        @csrf
                        <select class="form-control" name="status">
                            <option value="">Selecione um status</option>
                            @if($ticket->status->label !== 'Em Andamento')
                            <option value="1">Em Andamento</option>
                            @endif
                            <option value="2">Fechado</option>
                        </select>
                        <button type="submit" class="mt-3 btn waves-effect waves-light btn-success">
                           <i class="fa fa-exchange-alt"></i> Atualizar
                        </button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Arquivos do Pedido</h4>
                    @if($ticket->files->count() === 0)
                    <div>Nenhum arquivo</div>
                    @else

                    <table class="table table-striped muted-bordered-table table-bordered mt-4">
                        <tbody>
                        @foreach($ticket->files as $file)
                            <tr>
                                <td>
                                    <a href="{{$file->link}}" download><i class="fa fa-download mr-2"></i>
                                        <span>{{$file->name}}</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


@once
    @push('scripts')
        <script src="{{url('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{url('assets/extra-libs/jquery.repeater/repeater-init.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('assets/libs/ckeditor/samples/js/sample.js')}}"></script>
        <script data-sample="1">
            CKEDITOR.replace('editorTextarea', {
                height: 150
            });
        </script>
    @endpush
@endonce
