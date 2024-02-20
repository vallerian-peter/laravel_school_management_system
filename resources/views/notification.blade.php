
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissable alert-notification fade show" role="alert">
        <strong>Congratulation!</strong> {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger alert-dismissable alert-notification fade show" role="alert">
        <strong>Error!</strong> {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif