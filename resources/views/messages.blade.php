@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
    <strong class="mr-auto p-2">{{ $message }}</strong>
    <i class="btn bi bi-x-circle-fill p-2" data-dismiss="alert"></i>
</div>
@elseif ($message = Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert">
    <strong class="mr-auto p-2">{{ $message }}</strong>
    <i class="btn bi bi-x-circle-fill p-2" data-dismiss="alert"></i>
</div>
@endif