<div class="table-responsive mb-3">
    <table class="table table-bordered table-striped" id="{{ $config->modelNames->dashedPlural }}-table">
        <thead>
        <tr>
            {!! $fieldHeaders !!}
    @if($config->options->localized)
    <th>@@lang('crud.action')</th>
    @else
        <th>Action</th>
    @endif
        </tr>
        </thead>

        <tbody>
            @@foreach(${{ $config->modelNames->camelPlural }} as ${{ $config->modelNames->camel }})
                <tr>
                    {!! $fieldBody !!}

                    <td>
                        <div class="btn-group">
                            <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.show', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                               class='btn btn-sm btn-primary'>
                                @if($config->options->localized) @@lang('crud.detail') @else View @endif
                            </a>
                            <a href="@{{ route('{!! $config->prefixes->getRoutePrefixWith('.') !!}{!! $config->modelNames->camelPlural !!}.edit', [${!! $config->modelNames->camel !!}->{!! $config->primaryName !!}]) }}"
                               class='btn btn-sm btn-success'>
                                @if($config->options->localized) @@lang('crud.edit') @else Edit @endif
                            </a>
                            <a href="#!" onclick="if(confirm(@if($config->options->localized) @@lang('crud.are_you_sure') @else
 'Are you sure?' @endif)){event.preventDefault(); document.getElementById('delete_{{ $config->modelNames->camelPlural }}_{{'{{'}} ${{ $config->modelNames->camel }}->{{ $config->primaryName }} }}').submit();}"
                               class='btn btn-sm btn-danger'>
                                    @if($config->options->localized) @@lang('crud.delete') @else Delete @endif
                            </a>
                        </div>
                        @{!! Form::open([
                            'route' => ['{{ $config->prefixes->getRoutePrefixWith('.') }}{{ $config->modelNames->camelPlural }}.destroy', ${{ $config->modelNames->camel }}->{{ $config->primaryName }}],
                            'method' => 'delete',
                            'id' => 'delete_{{ $config->modelNames->camelPlural }}_'.${{ $config->modelNames->camel }}->{{ $config->primaryName }}
                        ]) !!}
                        @{!! Form::close() !!}
                    </td>
                </tr>
            @@endforeach
        </tbody>
    </table>
</div>
{!! $paginate !!}
