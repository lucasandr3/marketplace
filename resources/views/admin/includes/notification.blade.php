@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong><i class="fa fa-check"></i> Sucesso - </strong> {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong><i class="fa fa-circle"></i> Erro - </strong> {{ session('error') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong><i class="fa fa-circle"></i> Informação - </strong> {{ session('info') }}}
    </div>
@endif
