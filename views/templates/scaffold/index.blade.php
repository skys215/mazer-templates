@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('models/{{ $config->modelNames->camelPlural }}.plural')
    @else
        {{ $config->modelNames->humanPlural }}
    @endif
@@endsection

@@section('page-action')
    <a class="btn btn-primary" href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.create') }}">
        @if($config->options->localized)
            @@lang('crud.add_new')
        @else
            Add New
        @endif
    </a>
@@endsection

@@section('content')
    @@include('mazer-templates::common.message')

    {!! $table !!}
@@endsection
