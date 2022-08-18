@if ($paginator->hasPages())
    <div class="navigation">
        <div class="pure-button-group">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <a class="pure-button" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                       aria-label="@lang('pagination.previous')">
                    @if($config->options->localized)
                        @@lang('pagination.previous')
                    @else
                        Prev
                    @endif
               </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                       aria-label="@lang('pagination.next')">
                    @if($config->options->localized)
                        @@lang('pagination.next')
                    @else
                        Next
                    @endif
               </a>
            @endif
        </div>
    </div>
@endif

