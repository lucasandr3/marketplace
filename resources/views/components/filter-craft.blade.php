<div class="mb-2 p-2">
    <div class="row mb-3">
        <div class="flex-1">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title font-weight-bold text-dark mb-0">
                        <i class="fa fa-filter mr-2 text-dark"></i>
                        FILTRO<br>
                        <small class="ml-1">Selecione as opções abaixo para filtrar os oficíos</small>
                    </h4>
                </div>
                <div>
                    <a href="{{route('oficios.modelos')}}" class="d-flex align-items-center">
                        Modelos de Ofício <i class="mdi mdi-arrow-right font-16 mr-1 ml-2"></i>
                    </a>
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
            <input data-perm="fornecedor-master" type="date" id="comprador" class="form-control"
                   style="height: 60px !important;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" placeholder="Comprador">

            <div class="input-group-append ml-1">
                <button style="height: 60px !important;width: 100%; border-radius: 5px;" id="buscarPregao"
                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                    APLICAR FILTRO
                </button>
            </div>
            <div class="input-group-append ml-1">
                <a href="{{route('oficios.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                    <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Cadastrar Ofício
                </a>
            </div>
        </div>
    </div>
</div>

