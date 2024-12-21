@if (!empty(session('success')))
    <div class="alet alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (!empty(session('error')))
    <div class="alet alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif
