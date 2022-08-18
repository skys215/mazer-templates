<!-- {{ $fieldTitle }} Field -->
<div class="form-group">
  <label>
    @if($config->options->localized)
        @{!! Form::label('{{ $fieldName }}', __('models/{{ $config->modelNames->camelPlural }}.fields.{{ $fieldName }}').':') !!}
    @else
        @{!! Form::label('{{ $fieldName }}', '{{ $fieldTitle }}:') !!}
    @endif
  </label>
  <p class="form-control-static">
    @{{ ${!! $config->modelNames->camel !!}->{!! $fieldName !!} }}
  </p>
</div>
