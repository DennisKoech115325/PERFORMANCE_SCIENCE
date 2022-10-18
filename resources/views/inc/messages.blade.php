@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="row justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $error }}
        </div>
    </div>
    @endforeach
@endif

@if (session('danger'))
    <div class="row justify-content-center">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('danger') }}
        </div>
    </div>
@endif

@if (session('success'))
    <div class="row justify-content-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session('success') }}
        </div>
    </div>
@endif