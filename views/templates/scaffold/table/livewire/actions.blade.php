<div class="btn-group">
    <a href="{{ $showUrl }}" class='btn btn-sm btn-primary'>
        View
    </a>
    <a href="{{ $editUrl }}" class='btn btn-sm btn-success'>
        Edit
    </a>
    <a href="#!" wire:click="deleteRecord({{ $recordId }})"
        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
        class='btn btn-sm btn-danger'>
        Delete
    </a>
</div>
