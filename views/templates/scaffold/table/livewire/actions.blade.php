<div class="btn-group">
    <a href="{{ $showUrl }}" class='btn btn-sm btn-primary'>
        @if($config->options->localized) @@lang('crud.detail') @else View @endif
    </a>
    <a href="{{ $editUrl }}" class='btn btn-sm btn-success'>
        @if($config->options->localized) @@lang('crud.edit') @else Edit @endif
    </a>
    <a href="#!" wire:click="deleteRecord({{ $recordId }})"
        onclick="confirm(@@lang('crud.are_you_sure') @else 'Are you sure?' @endif) || event.stopImmediatePropagation()"
        class='btn btn-sm btn-danger'>
        @if($config->options->localized) @@lang('crud.delete') @else Delete @endif
    </a>
</div>
