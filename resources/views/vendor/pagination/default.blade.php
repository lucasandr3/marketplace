@if ($paginator->hasPages())
    <nav class="d-flexcs mt-20">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Anterior</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Próximo</a>
                </li>
            @endif
        </ul>
        <div>
            <p class="mb-0" style="color: #666666;">
                {!! __('Showing') !!}
                <span class="font-weight-bold"><strong>{{ $paginator->firstItem() }}</strong></span>
                {!! __('to') !!}
                <span class="font-weight-bold"><strong>{{ $paginator->lastItem() }}</strong></span>
                {!! __('of') !!}
                <span class="font-weight-bold"><strong>{{ $paginator->total() }}</strong></span>
                resultado(s)
            </p>
        </div>
    </nav>
@elseif($paginator->total() > 0)
    <div>
        <p class="mb-0" style="color: #666666;">
            {!! __('Showing') !!}
            <span class="font-weight-bold"><strong>{{ $paginator->total() }}</strong></span>
            resultado(s)
        </p>
    </div>
@else
    <div>
        <p class="font-weight-bold mb-0" style="color: #666666;">
            Sem registros
        </p>
    </div>
@endif
