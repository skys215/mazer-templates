@@extends('layouts.app')

@@section('title')
    @if($config->options->localized)
        @@lang('crud.create') @@lang('models/{!! $config->modelNames->camelPlural !!}.singular')
    @else
        Create {{ $config->modelNames->humanPlural }}
    @endif
@@endsection

@@section('content')
    @@include('mazer-templates::common.errors')
    
    @{!! Form::open(['route' => '{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.store', 'class' => 'form form-vertical']) !!}
        <div class="form-body">
            <div class="row">
                @@include('{{ $config->prefixes->getViewPrefixForInclude() }}{{ $config->modelNames->snakePlural }}.fields')
            </div>

            <div class="col-12 d-flex justify-content-end">
              @{!! Form::submit(@if($config->options->localized) @@lang('crud.save') @else 'Save' @endif, ['class' => 'btn btn-primary me-1 mb-1']) !!}

              <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.index') }}" class="btn btn-light-secondary me-1 mb-1">@if($config->options->localized) @@lang('crud.cancel') @else Cancel @endif</a>
            </div>
        </div>
    @{!! Form::close() !!}
@@endsection
