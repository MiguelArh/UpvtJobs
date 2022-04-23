@if ($vacantes->hasPages())
    <nav>

        <div>

            <p class="text-sm text-gray-700 leading-5">
                {!! __('Showing') !!}
                <span class="font-medium">{{ $vacantes->firstItem() }}</span>
                {!! __('to') !!}
                <span class="font-medium">{{ $vacantes->lastItem() }}</span>
                {{-- {!! __('of') !!}
                <span class="font-medium">{{ $vacantes->total() }}</span>
                {!! __('results') !!} --}}
            </p>
        </div>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($vacantes->onFirstPage())
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $vacantes->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($vacantes->hasMorePages())
                <li><a href="{{ $vacantes->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
