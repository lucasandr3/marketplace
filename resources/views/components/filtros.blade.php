<form action="{{route("{$route}")}}" method="post">
    @csrf
<div class="mb-2 p-2">
    <div class="row mb-3">
        <div class="flex-1 d-flex justify-content-between align-content-center">
            <div>
                <h4 class="card-title font-weight-bold text-dark">
                    <i class="fa fa-filter mr-2 text-dark"></i>
                    Filtros<br>
                    <small class="ml-1">Selecione as opções abaixo para filtrar os produtos</small>
                </h4>
            </div>
            <div>
                <a href="{{route('products.create')}}" class="d-flex align-items-center">
                    Cadastrar Novo Produto <i class="mdi mdi-arrow-right font-16 mr-1 ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-group">
            <input type="text" id="number_process" name="number" value="{{$filters['number'] ?? ''}}" class="form-control col-2" style="height: 60px !important;width: 100%;"
                   placeholder="Número">
            <input type="text" id="descricao" name="object" class="form-control" style="height: 60px !important;width: 100%;"
                   placeholder="Objeto" value="{{$filters['object'] ?? ''}}">
            <input data-perm="fornecedor-master" name="organ" value="{{$filters['organ'] ?? ''}}" type="text" id="comprador" class="form-control"
                   style="height: 60px !important;width: 100%;" placeholder="Comprador">
            <select class="search form-control col-2"
                    style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" name="status">
                @if(!isset($filters['status']))
                    <option value="0">Todos</option>
                    <option value="1">Pendente</option>
                    <option value="2">Em Andamento</option>
                    <option value="3">Homologado</option>
                @else
                    <option value="0" @if($filters['status'] === 0) selected @endif>Todos</option>
                    <option value="1" @if($filters['status'] === 1) selected @endif>Pendente</option>
                    <option value="2" @if($filters['status'] === 2) selected @endif>Em Andamento</option>
                    <option value="3" @if($filters['status'] === 3) selected @endif>Homologado</option>
                @endif
            </select>

            <div class="input-group-append ml-1">
                <button style="height: 60px !important;width: 100%; border-radius: 5px;" id="buscarPregao"
                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                    APLICAR FILTRO
                </button>
            </div>
            <div class="input-group-append ml-1">
                <div data-toggle="collapse" style="height: 60px !important;width: 100%;border-radius: 5px;color: white;" href="#buscaAvancada"
                        aria-expanded="true" aria-controls="buscaAvancada" class="btn btn-warning radius d-flex align-items-center">
                    MAIS FILTROS
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row collapse card-filtros" style="padding: 0 1rem;" id="buscaAvancada">
    <div class="col row mt-3">
        <div class="col mb-2">
            <label for="criterio-julgamento" class="sr-onl">Modalidade: </label>
            <select id="criterio-julgamento" class="form-control custom-select" data-placeholder="Julgamento"
                    style="height: 50px;border-radius: 5px;" name="modality">
                <option value="">Modalidade:</option>
                @if(!isset($filters['modality']))
                    <option value="1">Pregão Eletrônico</option>
                    <option value="2">Dispensa Eletrônica</option>
                    <option value="3">Concorrência</option>
                    <option value="4">Credenciamento</option>
                @else
                    <option value="1" @if($filters['modality'] === '1') selected @endif>Pregão Eletrônico</option>
                    <option value="2" @if($filters['modality'] === '2') selected @endif>Dispensa Eletrônica</option>
                    <option value="3" @if($filters['modality'] === '3') selected @endif>Concorrência</option>
                    <option value="4" @if($filters['modality'] === '4') selected @endif>Credenciamento</option>
                @endif
            </select>
        </div>
        <div class="col mb-2">
            <label for="criterio-julgamento" class="sr-onl">Tipo de Data: </label>
            <select id="dataBusca" class="form-control custom-select" name="type_data" style="height: 50px;border-radius: 5px;">
                <option value="">Tipo de Data</option>
                @if(!isset($filters['intervalo_data']))
                    <option value="init_session">Data Disputa</option>
                    <option value="created_at">Data Cadastro</option>
                @else
                    <option value="init_session" @if($filters['intervalo_data']['colunm'] === 'init_session') selected @endif>Data Disputa</option>
                    <option value="created_at" @if($filters['intervalo_data']['colunm'] === 'created_at') selected @endif>Data Cadastro</option>
                @endif
            </select>
        </div>
        <div class="col data mb-2">
            <label for="criterio-julgamento" class="sr-onl">Início: </label>
            <div class="input-group date form_datetime align-items-center">
                <input type="date" id="dataInicial" autocomplete="off" name="dataInicial"
                       class="form-control"
                       aria-invalid="false"
                       placeholder="De:"
                       value="@if(isset($filters['intervalo_data']['dataInicial'])) {{\Carbon\Carbon::parse($filters['intervalo_data']['dataInicial'])->format('Y-m-d')}} @endif"
                       style="height: 50px;border-radius: 5px;"/>
            </div>
        </div>
        <div class="col data mb-2">
            <label for="criterio-julgamento" class="sr-onl">Fim: </label>
            <div class="input-group date form_datetime align-items-center">
                <input type="date" id="dataFinal" autocomplete="off" name="dataFinal"
                       class="form-control"
                       aria-invalid="false"
                       placeholder="Até:"
                       value="@if(isset($filters['intervalo_data']['dataInicial'])) {{\Carbon\Carbon::parse($filters['intervalo_data']['dataFinal'])->format('Y-m-d') }} @endif"
                       style="height: 50px;border-radius: 5px;"/>
            </div>
        </div>
    </div>
</div>
</form>
