@if ($vacantes->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($vacantes->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $vacantes->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination vacantess --}}
            @foreach ($vacantes as $vacantes)
                {{-- "Three Dots" Separator --}}
                @if (is_string($vacantes))
                    <li class="disabled" aria-disabled="true"><span>{{ $vacantes }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($vacantes))
                    @foreach ($vacantes as $page => $url)
                        @if ($page == $vacantes->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($vacantes->hasMorePages())
                <li>
                    <a href="{{ $vacantes->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
