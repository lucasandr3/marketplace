@extends('layouts.app')

@section('title', 'Documentos')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('hub')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Gestão de Documentos</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body pt-0">

                    <div class="card-header d-flex justify-content-between align-items-center mb-4"
                         style="background-color: rgba(0,0,0,.03);margin-left: -20px;margin-right: -20px;">
                        <h4 class="card-title mb-0 -weight-bold text-dark">
                            <i class="mdi mdi-file-document-box mr-2 text-dark"></i>
                            <span id="contrato-header">Documentos</span><br>
                            <small class="ml-1">Gestão de Documentos</small>
                        </h4>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            @foreach($units as $unit)
                                <div class="col-md-6">
                                    <div class="card card-body mb-0" style="border: 1px solid #eee;">
                                        <span class="side-stick"></span>
                                        <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">{{$unit->name}}</h5>
                                        <div class="note-content">
                                            <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Documentos da unidade</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="{{route('documents.index', $unit->id)}}">Ir para documentos <i class="mdi mdi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div> <!-- end card-body-->
            </div>
        </div>
    </div>
@endsection
