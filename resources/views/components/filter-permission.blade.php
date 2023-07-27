<div class="mb-2 p-2">
    <div class="row mb-3">
        <div class="flex-1">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="card-title font-weight-bold text-dark mb-0">
                        <i class="fa fa-filter mr-2 text-dark"></i>
                        FILTRO<br>
                        <small class="ml-1">Selecione busque pela permissão</small>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-group">
            <div class="flex-1">
                <input type="text" id="description" name="filter" class="form-control" style="height: 60px !important;width: 100%;width: 100%;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"
                       placeholder="Digite aqui o que procura...">

            </div>
            <div class="input-group-append ml-1">
                <button style="height: 60px !important;width: 100%; border-radius: 5px;" id="buscarPregao"
                        class="btn btn-success"><i class="fa fa-search mr-2"></i>
                    APLICAR FILTRO
                </button>
            </div>
            @if($showBtn)
                @if($newRegister)
                    <div class="input-group-append ml-1">
                        <a href="{{route('permissoes.create')}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                            <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Nova permissão
                        </a>
                    </div>
                @else
                    <div class="input-group-append ml-1">
                        <a href="{{route("{$route}.permissions.available", $targetId)}}" class="btn btn-info" style="border-radius: 5px;padding: 15px;" >
                            <i class="mdi mdi-plus font-16 mr-1 ml-2"></i> Vincular nova permissão
                        </a>
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>

