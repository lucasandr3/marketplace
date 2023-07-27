<div class="mb-2 p-2">
    <div class="row mb-3">
        <div class="flex-1">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title font-weight-bold text-dark mb-0">
                        <i class="fa fa-filter mr-2 text-dark"></i>
                        FILTRO<br>
                        <small class="ml-1">Selecione as opções abaixo para filtrar os contratos</small>
                    </h4>
                </div>
                <div class="d-flex align-items-center gap-10">
                    <h4 class="card-title mb-0">Legenda:</h4>
                    <div>
                        <span class="bg-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span><span class="font-weight-bold"></span> Vence no mês seguinte</span>
                    </div>
                    <div>
                        <span class="bg-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span><span class="font-weight-bold"></span> Vence no mês atual</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-group">
            <input type="text" id="numeroPregao" class="form-control col-2" style="height: 60px !important;width: 100%;"
                   placeholder="Número">
            <input type="text" id="descricao" class="form-control" style="height: 60px !important;width: 100%;"
                   placeholder="Objeto">
            <input data-perm="fornecedor-master" type="text" id="comprador" class="form-control"
                   style="height: 60px !important;width: 100%;" placeholder="Comprador">
            <select id="valorStatus" class="search form-control col-2"
                    style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
            </select>

            <div class="input-group-append ml-1">
                <button style="height: 60px !important;width: 100%; border-radius: 5px;" id="buscarPregao"
                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                    APLICAR FILTRO
                </button>
            </div>
            <div class="input-group-append ml-1">
{{--                <button data-toggle="collapse" style="height: 60px !important;width: 100%;border-radius: 5px;color: white;" href="#buscaAvancada"--}}
{{--                        aria-expanded="true" aria-controls="buscaAvancada" class="btn btn-warning radius">--}}
{{--                    Cadastrar Contrato--}}
{{--                </button>--}}
                <a href="{{route('contratos.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                    <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Cadastrar Contrato
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row collapse card-filtros" style="padding: 0 1rem;" id="buscaAvancada">
    <div class="row mt-3">
        <div class="col-md-3 mb-2">
            <label for="criterio-julgamento" class="sr-onl">Julgamento: </label>
            <select id="criterio-julgamento" class="form-control custom-select" data-placeholder="Julgamento"
                    style="height: 50px;border-radius: 5px;">
                <option value="">Critério de Julgamento</option>
                <option value="1">Menor preço por Item</option>
                <option value="2">Menor preço por Lote</option>
                <option value="3">Maior Desconto</option>
                <option value="5">Menor Taxa</option>
                <option value="4">Maior Lance</option>
                <option value="6">Maior desconto por Lote</option>
            </select>
        </div>
        <div class="col-md-3 mb-2">
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
                <input type="text" id="dataInicial" autocomplete="off" name="dataInicial" value=""
                       class="form-control"
                       aria-invalid="false"
                       placeholder="De:"
                       style="height: 50px;border-radius: 5px; border-bottom-right-radius: 0px; border-top-right-radius: 0px;"/>
                <div class="input-group-addon" style="height: 50px;"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
        <div class="col data mb-2">
            <label for="criterio-julgamento" class="sr-onl">Fim: </label>
            <div class="input-group date form_datetime align-items-center">
                <input type="text" id="dataFinal" autocomplete="off" name="dataFinal" value=""
                       class="form-control"
                       aria-invalid="false"
                       placeholder="Até:"
                       style="height: 50px;border-radius: 5px; border-bottom-right-radius: 0px; border-top-right-radius: 0px;"/>
                <div class="input-group-addon" style="height: 50px;"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-9 mb-2">
            <label for="segmentos" class="ml-0 mr-2">Segmentos: </label>
            <select id="segmentos" class="form-control select2" multiple="multiple" name="segmentos[]"
                    data-close-on-select="true" data-placeholder="Selecione os segmentos">
                <option value="">Selecione</option>
            </select>
        </div>
        <div class="col-3 mb-2" id="ufs" data-perm="fornecedor-master">
            <label for="uf">Estado: </label>
            <select id="uf" class="form-control select2" multiple="multiple" name="states[]"
                    data-close-on-select="true" data-placeholder="Selecione o estado">
                <option value="">Selecione</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </div>
    </div>
</div>
