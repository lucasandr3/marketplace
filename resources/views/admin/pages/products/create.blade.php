@extends('layouts.app')

@section('title', 'Cadastro Processo | Onlicitação')

@once
    @push('styles')
        <link rel="stylesheet" type="text/css"
              href="{{url('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/libs/ckeditor/samples/css/samples.css')}}">
    @endpush
@endonce

@section('breadcrumb')
    <div class="col-md-5 col-12 align-self-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Cadastro de Produto</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">

            <div class="card" id="p-info">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-2">
                        Informações Básicas
                    </h4>
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-6">
                            <label class="control-label col-form-label">Estoque: <small class="text-primary">(
                                    obrigatório )</small></label>
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option>Selecione uma opção</option>
                                <option value="0">Sem estoque</option>
                                <option value="1">Estoque</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label class="control-label col-form-label">Marca: <small class="text-primary">(
                                    obrigatório )</small></label>
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option>Selecione a marca</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Tags: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <input type="email" class="form-control" name="tags"
                                       placeholder="separe as tags com vírgula">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-detalhes">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-2">
                        Detalhes
                    </h4>
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Nome: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <input type="email" class="form-control" name="name"
                                       placeholder="digite o nome do produto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Descrição: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <textarea class="form-control" cols="80" id="editorTextarea" data-sample="1" rows="3" id="objetoContrato" required="true"
                                          data-campo="Objeto" aria-invalid="false"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-disponibilidade">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Categorias do Produto
                    </h4>
                    <div class="row mb-4">
                        <div class="col-sm-12 col-md-12">
                            <label class="control-label col-form-label">Categorias:</label>
                            <select class="select2 form-control custom-select multi-escolhas" name="categories[]" multiple="multiple" style="width: 100%; height:36px;">
                                <option>Selecione a categoria</option>
                                <option value="Bermudas">Bermudas</option>
                                <option value="Regata">Regata</option>
                            </select>
                        </div>
                    </div>
                    <h5 class="card-title font-weight-bold text-dark mb-0">
                        Categorias Selecionadas
                    </h5>
                    <p>Categorias que ja estão no selecionadas no produto.</p>

                    <div class="row mt-4">
                        <div class="col-md-3 mb-3">
                            <input type="checkbox" id="site" class="material-inputs filled-in chk-col-blue" checked/>
                            <label for="site">Camisas</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="checkbox" id="app" class="material-inputs filled-in chk-col-blue" checked/>
                            <label for="app">Polo</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-imagens">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Imagens
                    </h4>
                    <div>
                        <input type="file" name="files" multiple/>
                    </div>
                </div>
            </div>

            <div class="card" id="p-disponibilidade">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Disponibilidade
                    </h4>
                    <div class="alert alert-success" role="alert">
                        <strong><i class="fa fa-info-circle"></i></strong>
                        Ao agendar a disponibilidade, esse produto não estará disponível para o grupo
                        de clientes do canal até que a data tenha passado e o produto esteja ativo.
                    </div>
                    <h5 class="card-title font-weight-bold text-dark mb-0">
                        Canais
                    </h5>
                    <p>Selecione em quais canais este produto está disponível.</p>

                    <div class="row mt-4">
                        <div class="col-md-3 mb-3">
                            <input type="checkbox" id="site" class="material-inputs filled-in chk-col-blue" />
                            <label for="site">Site</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="checkbox" id="app" class="material-inputs filled-in chk-col-blue" />
                            <label for="app">Aplicativo</label>
                        </div>
                    </div>

                    <h5 class="card-title font-weight-bold text-dark mb-0 mt-3">
                        Visibilidade
                    </h5>
                    <p>Agende para quais grupos de clientes este produto está disponível.</p>

                    <div class="row mt-4">
                        <div class="col-md-3 mb-3">
                            <input name="group1" class="material-inputs" type="radio" id="mostrar" checked="">
                            <label for="mostrar">Mostrar</label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input name="group1" class="material-inputs" type="radio" id="escondido">
                            <label for="escondido">Não mostrar</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-variacoes">
                <div class="card-body">
                    <span>variacoes</span>
                </div>
            </div>

            <div class="card" id="p-preco">
                <div class="card-body">
                    <span>preços</span>
                </div>
            </div>

            <div class="card" id="p-identificadores">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Identificadores do produto
                    </h4>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">SKU: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <input type="email" class="form-control" name="tags"
                                       placeholder="informe o sku">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-6">
                            <label class="control-label col-form-label">Nº global de itens comerciais (GTIN): <small class="text-primary">(
                                    obrigatório )</small></label>
                            <input type="email" class="form-control" name="tags"
                                   placeholder="informe o gtin">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label class="control-label col-form-label">Nº da peça do fabricante (MPN): <small class="text-primary">(
                                    obrigatório )</small></label>
                            <input type="email" class="form-control" name="tags"
                                   placeholder="informe o mpn">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Código de barras UPC/EAN: <small class="text-primary">(
                                        obrigatório )</small></label>
                                <input type="email" class="form-control" name="tags"
                                       placeholder="informe o código de barras">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-estoque">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Estoque
                    </h4>
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-3">
                            <label class="control-label col-form-label">Estoque: <small class="text-primary">(
                                    obrigatório )</small></label>
                            <input type="number" class="form-control" name="estoque" value="0"
                                   placeholder="0">
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <label class="control-label col-form-label">Compra sem estoque: <small class="text-primary">(
                                    obrigatório )</small></label>
                            <input type="number" class="form-control" name="sem_estoque" value="0"
                                   placeholder="0">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label class="control-label col-form-label">Permitir Compra: <small class="text-primary">(
                                    obrigatório )</small></label>
                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                <option value="0">Sempre</option>
                                <option value="1">Em estoque</option>
                                <option value="2">Sem estoque</option>
                            </select>
                        </div>
                    </div>
                    <div class="alert alert-success mb-0" role="alert">
                        <strong><i class="fa fa-info-circle"></i></strong>
                        Este item <strong>sempre</strong> pode ser comprado.
                    </div>
                </div>
            </div>

            <div class="card" id="p-frete">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-3">
                        Frete
                    </h4>
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-3">
                            <label class="control-label col-form-label">Comprimento:</label>
                            <input type="number" class="form-control" name="estoque" value="0"
                                   placeholder="0">
                            <div class="relative-frete">
                                <select class="form-control">
                                    <option value="mm">MM</option>
                                    <option value="cm">CM</option>
                                    <option value="in">EM</option>
                                    <option value="m">M</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label class="control-label col-form-label">Largura:</label>
                            <input type="number" class="form-control" name="sem_estoque" value="0"
                                   placeholder="0">
                            <div class="relative-frete">
                                <select class="form-control">
                                    <option value="mm">MM</option>
                                    <option value="cm">CM</option>
                                    <option value="in">EM</option>
                                    <option value="m">M</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label class="control-label col-form-label">Altura:</label>
                            <input type="number" class="form-control" name="sem_estoque" value="0"
                                   placeholder="0">
                            <div class="relative-frete">
                                <select class="form-control">
                                    <option value="mm">MM</option>
                                    <option value="cm">CM</option>
                                    <option value="in">EM</option>
                                    <option value="m">M</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <label class="control-label col-form-label">Peso:</label>
                            <input type="number" class="form-control" name="sem_estoque" value="0"
                                   placeholder="0">
                            <div class="relative-frete">
                                <select class="form-control">
                                    <option value="mm">G</option>
                                    <option value="cm">KG</option>
                                    <option value="in">L</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" id="p-associacoes">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold text-dark mb-0">
                        <div class="d-flex justify-content-between">
                            <div>Associações - Up Sell</div>
                            <div><button class="btn btn-dark" onclick="toggleMenuOffcanvas()"><i class="fa fa-check"></i> Adicionar</button></div>
                        </div>
                    </h4>
                    <p>Quando o cliente estiver no carrinho, recomende outro produto para compra.</p>
                    <div class="table-responsive">
                        <table class="table table-striped search-table v-middle mb-0">
                            <thead class="header-item">
                            <tr>
                                <th class="font-weight-bold">Produto</th>
                                <th class="font-weight-bold text-right">Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="search-items">
                                    <td>

                                    </td>
                                    <td class="text-right">
                                        <div class="action-btn">
                                            <a href="#" class="btn waves-effect waves-light btn-danger" data-toggle="tooltip" title="Desvincular">
                                                <i class="mdi mdi-link-variant-off"></i>
                                                desvincular
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card" id="p-colecoes">
                <div class="card-body">
                    <span>coleçoes</span>
                </div>
            </div>

        </div> <!-- end col-->

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                        <a class="nav-link show active" id="v-pills-home-tab" data-toggle="pill" href="#p-info"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Informações básicas</span>
                        </a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#p-detalhes" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Detalhes</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-categorias" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Categorias</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-imagens" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Imagens</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-disponibilidade"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Disponibilidade</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-variacoes" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Variações</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-preco"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Preço</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-identificadores"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Identificadores</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-estoque"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Estoque</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-frete"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Frete</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-associacoes"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Associações</span>
                        </a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#p-colecoes"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Coleções</span>
                        </a>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="modal-btns-actions">
            <div class="">

                <div class="btn-group">
                    <button type="button" class="btn btn-warning"><i class="fa fa-eye-slash"></i> Rascunho</button>
                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <div class="d-flex">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <p class=" font-semibold mr-2">
                                    Publicado
                                </p>
                                <span class="text-success"><i class="fa fa-check"></i></span>
                            </div>
                            <p class="mt-2 text-left text-gray-500">
                                Este produto estará disponível em todos <br> os canais habilitados e grupos de clientes.
                            </p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <div class="d-flex">
                                <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                <p class=" font-semibold mr-2">
                                    Rascunho
                                </p>
                                <span class="text-success"><i class="fa fa-check"></i></span>
                            </div>
                            <p class="mt-2">
                                Este produto ficará oculto de todos<br> os canais e grupos de clientes.
                            </p>
                        </a>
                    </div>
                </div>

                <button type="button" class="btn btn-info">Salvar Produto</button>

            </div>
        </div>
    </div>

    <div class="offcanvas-menu">
        <div class="offcanvas-header">
            <h5 class="card-title mb-0" id="offcanvasExampleLabel">
                Pesquisar Produtos
            </h5>
            <button type="button" class="btn btn-dark" onclick="toggleMenuOffcanvas()">
                <i class="mdi mdi-close"></i>
            </button>
        </div>
        <div class="card-body p-2">
            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                <li class="nav-item">
                    <a href="#produtos-filtro" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                        <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                        <span class="d-none d-lg-block">Buscar Produtos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#produtos-associados" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                        <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                        <span class="d-none d-lg-block">Produtos associados</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="produtos-filtro">
                    <div class="">
                        <label class="control-label col-form-label">Pesquisar Produto: </label>
                        <input type="text" class="form-control" name="sem_estoque"
                               placeholder="pesquisar...">
                    </div>
                </div>
                <div class="tab-pane show" id="produtos-associados">
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <input type="checkbox" id="p1" class="material-inputs filled-in chk-col-blue" />
                            <label for="p1">Produto 1</label>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="checkbox" id="p2" class="material-inputs filled-in chk-col-blue" />
                            <label for="p2">Produto 2</label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script src="{{url('painel/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
        <script src="{{url('painel/extra-libs/jquery.repeater/repeater-init.js')}}"></script>
        <script src="{{url('painel/libs/ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('painel/libs/ckeditor/samples/js/sample.js')}}"></script>
        <script data-sample="1">
            CKEDITOR.replace('editorTextarea', {
                height: 150
            });
        </script>
    @endpush
@endonce


{{--
<div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                <a class="nav-link show active" id="v-pills-home-tab" data-toggle="pill" href="#p-info" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Informações básicas</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#p-detalhes" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Atributos</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Imagens</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Disponibilidade</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Variações</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Preço</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Identificadores</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Estoque</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Frete</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Urls</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Associações</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Coleções</span>
                                </a>
                            </div>

--}}
