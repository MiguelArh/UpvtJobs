@if ($vacantes->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($vacantes->onFirstPage())
            <a class="icon item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"> <i class="left chevron icon"></i> </a>
        @else
            <a class="icon item" href="{{ $vacantes->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> <i class="left chevron icon"></i> </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($vacantes as $vacante)
            {{-- "Three Dots" Separator --}}
            @if (is_string($vacante))
                <a class="icon item disabled" aria-disabled="true">{{ $vacante }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($vacante))
                @foreach ($vacante as $page => $url)
                    @if ($page == $vacantes->currentPage())
                        <a class="item active" href="{{ $url }}" aria-current="page">{{ $page }}</a>
                    @else
                        <a class="item" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($vacantes->hasMorePages())
            <a class="icon item" href="{{ $vacantes->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="right chevron icon"></i> </a>
        @else
            <a class="icon item disabled" aria-disabled="true" aria-label="@lang('pagination.next')"> <i class="right chevron icon"></i> </a>
        @endif
    </div>
@endif
