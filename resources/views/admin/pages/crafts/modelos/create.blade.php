@extends('layouts.app')

@section('title', 'Ofícios')

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('oficios.index')}}">Cadastro Ofício</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Cadastro Modelo Ofício</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div id="formulario-contrato-pncp">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center"
                         style="background-color: rgba(0,0,0,.03);">
                        <h4 class="card-title mb-0 -weight-bold text-dark">
                            <i class="mdi mdi-database-plus mr-2 text-dark"></i>
                            <span id="contrato-header">Cadastro modelo de Ofício</span><br>
                            <small class="ml-1">Informe os dados do ofício</small>
                        </h4>
                    </div>
                    <form action="{{route('oficios.modelo.store')}}" method="POST">
                        @csrf
                        <div class="card-body border-top">

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong><i class="fa fa-bell"></i> Obs - </strong>
                                Atenção aqui você cria templates de ofícios
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="objetoContrato" class="control-label col-form-label">Ofício <small
                                                class="text-primary">( obrigatório )</small></label>
                                        <textarea cols="80" id="mymce" name="model" rows="10" data-sample="1"
                                                  data-sample-short required>
                                    </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border-top d-flex gap-10 card-footer">
                            <a href="{{route('oficios.index')}}" class="btn btn-outline-secondary">
                                <i class="mdi mdi-arrow-left"></i> Voltar
                            </a>
                            <div class="text-end">
                                <button type="submit" class="
                              btn btn-info
                              px-4
                              waves-effect waves-light
                            "
                                        id="salvar-contrato-pncp"
                                >
                                    <i class="fa fa-check"></i> Cadastrar modelo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('assets/libs/tinymce/tinymce.min.js')}}"></script>
        <script>
            $(function () {
                if ($("#mymce").length > 0) {
                    tinymce.init({
                        selector: "textarea#mymce",
                        theme: "modern",
                        height: 300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    });
                }
            });
        </script>
    @endpush
@endonce


{{--

MODELO DE DOCUMENTO PARA SOLICITAÇÃO DE ACESSO ÀS BASES DE DADOS





%s, %s de %s de %s.





Ao Senhor,

Luis Felipe Batista de Oliveira

Secretário de Trabalho

Secretaria de Trabalho

Ministério do Trabalho e Previdência

Esplanada dos Ministérios, Ministério do Trabalho e Previdência, Bloco F, 4º andar, CEP 70.056-900 - Brasília/DF





Assunto: Solicita acesso às bases de dados identificadas [da Relação Anual de Informações Sociais – RAIS e/ou do Cadastro-Geral de Empregados e Desempregados – CAGED].

Senhor Secretário de Trabalho,

1. Vimos solicitar acesso aos dados identificados da (s) bases [da Relação Anual de Informações Sociais – RAIS e/ou do Cadastro-Geral de Empregados e Desempregados – CAGED], com a finalidade de [descrição da finalidade de acesso aos dados identificados]. Tal acesso justifica-se pelo fato de [descrição da Justificativa para acesso aos dados identificados].

2. Para tanto, necessitamos especificamente de [Descrição das principais variáveis de interesse, abrangência geográfica, periodicidade e caso se trate de Entidades de Representação laboral indicar a Base de Representação, segundo a Classificação Nacional de Atividades Econômicas – CNAE].

3. Dúvidas em relação à solicitação poderão ser esclarecidas por [nome da pessoa de referência] por meio dos seguintes contatos: [endereço eletrônico] e [telefone].





Atenciosamente,





%s

%s

[Setor/coordenação/diretoria]

%s
--}}
