<li class="sidebar-item  @{{ Request::is('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}*') ? ' active' : '' }}">
    <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>
            @if($config->options->localized)
                @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
            @else
                {{ $config->modelNames->humanPlural }}
            @endif
        </span>
    </a>
</li>
