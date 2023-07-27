<div class="mb-2 p-2">
    <div class="row mb-3">
        <div class="flex-1 d-flex justify-content-between align-content-center">
            <div>
                <h4 class="card-title font-weight-bold text-dark">
                    <i class="fa fa-filter mr-2 text-dark"></i>
                    MODALIDADES<br>
                    <small class="ml-1">Selecione as opções abaixo para filtrar os processos</small>
                </h4>
            </div>
            <div>
                <a href="{{route('documents.create', $unit->id)}}" class="d-flex align-items-center">
                    Cadastrar Novo Documento <i class="mdi mdi-arrow-right font-16 mr-1 ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-group">
            <input type="text" id="numeroPregao" class="form-control col-2" style="height: 60px !important;width: 100%;"
                   placeholder="Número">
            <input data-perm="fornecedor-master" type="text" id="comprador" class="form-control col-3"
                   style="height: 60px !important;width: 100%;" placeholder="Responsável">
            <select id="valorStatus" class="search form-control col-3"
                    style="height: 60px !important;width: 100%;">
                <option value="" data-tipo="1&quot;">Tipos de Documento</option>
                @foreach($typeDocuments as $type)
                    <option value="{{$type->id}}" data-tipo="1&quot;">{{$type->type}}</option>
                @endforeach
            </select>
            <select id="valorStatus" class="search form-control col-2"
                    style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                <option value="" data-tipo="1&quot;">Departamentos</option>
                <option value="compras" data-tipo="1&quot;">Compras</option>
                <option value="licitacao" data-tipo="1&quot;">Licitação</option>
            </select>

            <div class="input-group-append ml-1">
                <button style="height: 60px !important;width: 100%; border-radius: 5px;" id="buscarPregao"
                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                    FILTRAR
                </button>
            </div>
            <div class="input-group-append ml-1">
                <button data-toggle="collapse" style="height: 60px !important;width: 100%;border-radius: 5px;color: white;" href="#buscaAvancada"
                        aria-expanded="true" aria-controls="buscaAvancada" class="btn btn-warning radius">
                    MAIS FILTROS
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row collapse card-filtros" style="padding: 0 1rem;" id="buscaAvancada">
    <div class="col row mt-3">
        <div class="col mb-2">
            <label for="criterio-julgamento" class="sr-onl">Modalidade: </label>
            <select id="criterio-julgamento" class="form-control custom-select" data-placeholder="Julgamento"
                    style="height: 50px;border-radius: 5px;">
                <option value="">Modalidade:</option>
                <option value="1">Pregão Eletrônico</option>
                <option value="2">Dispensa Eletrônica</option>
                <option value="3">Concorrência</option>
                <option value="4">Credenciamento</option>
            </select>
        </div>
        <div class="col mb-2">
            <label for="criterio-julgamento" class="sr-onl">Tipo de Data: </label>
            <select id="dataBusca" class="form-control custom-select" style="height: 50px;border-radius: 5px;">
                <option value="">Tipo de Data</option>
                <option value="datIniDisputa">Data Disputa</option>
                <option value="datPublicacao">Data Publicação</option>
            </select>
        </div>
        <div class="col data mb-2">
            <label for="criterio-julgamento" class="sr-onl">Início: </label>
            <div class="input-group date form_datetime align-items-center">
                <input type="date" id="dataInicial" autocomplete="off" name="dataInicial" value=""
                       class="form-control"
                       aria-invalid="false"
                       placeholder="De:"
                       style="height: 50px;border-radius: 5px;"/>
            </div>
        </div>
        <div class="col data mb-2">
            <label for="criterio-julgamento" class="sr-onl">Fim: </label>
            <div class="input-group date form_datetime align-items-center">
                <input type="date" id="dataFinal" autocomplete="off" name="dataFinal" value=""
                       class="form-control"
                       aria-invalid="false"
                       placeholder="Até:"
                       style="height: 50px;border-radius: 5px;"/>
            </div>
        </div>
    </div>
</div>
