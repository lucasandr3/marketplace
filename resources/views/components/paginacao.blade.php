<div class="d-flex align-items-center justify-content-between pl-2 pr-2 pb-2" style="margin-top: 8px;">
    @if(!$paginacao->totalPages == 0)
        <div>
            <span>Mostrando <strong>{{$paginacao->showing}}</strong> registros de um total de <strong>{{$paginacao->quantityRegisters}}</strong></span>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination mb-0">
                <li class="page-item prev-item">
                    <a class="page-link text-lightblue" href="{{$paginacao->baseLink . $paginacao->first}}">Primeira</a>
                </li>

                @for ($p = 0; $p < sizeof($paginacao->pages); $p++)
                    <li class="page-item {{($paginacao->current === $paginacao->pages[$p]) ? 'active' : ''}}">
                        <a class="page-link" style="cursor: pointer;"
                           href="{{$paginacao->baseLink . $paginacao->pages[$p]}}">{{$paginacao->pages[$p]}}
                        </a>
                    </li>
                @endfor

                <li class="page-item next-item">
                    <a class="page-link text-lightblue" href="{{$paginacao->baseLink . $paginacao->last}}">Última</a>
                </li>
            </ul>
        </nav>
    @else
        <div>
            <span><strong>Sem Registros</strong></span>
        </div>
    @endif
</div>
