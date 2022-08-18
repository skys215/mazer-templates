@foreach (session('flash_notification', collect())->toArray() as $message)
    <div class="alert alert-success">
        <i class="bi bi-check-circle"></i> {!! $message['message'] !!}
    </div>
@endforeach
{{ session()->forget('flash_notification') }}
