@extends('Front-End.Layouts.Main')
@section('main-section')
@push('title')
    <title>Wine Category</title>
@endpush

<body class="bg-gradient-primary">

    @if(session('success'))
        <div id="success-message" class="alert alert-success" style="display: none;">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                @if(isset($winecategorytitle))
                            <h1 class="h4 text-gray-900 mb-4">{{ $winecategorytitle }} Wine Category</h1>
                            <hr>
                        @else
                            <h1 class="h4 text-gray-900 mb-4">Create Wine Category</h1>
                            <hr>
                        @endif
                            </div>
                            @if(isset($winecategorytitle))
                            <form method="post" action="{{ route('winecategory.update') }}" enctype="multipart/form-data">
                                @else
                            <form method="post" action="{{url('wine/category/submit')}}" enctype="multipart/form-data">
                                @endif
                           
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="title"
                                        placeholder="Title" name="title" value="{{ isset($winecategory) ? $winecategory->title : '' }}">
                                        <input type="hidden" name="winecategoryid" value="{{ isset($winecategory) ? $winecategory->id : '' }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" id="status" name="status">
                                        <option value="active" {{ isset($winecategory) && $winecategory->status === 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ isset($winecategory) && $winecategory->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                                @if(isset($winecategorytitle))
                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                {{$winecategorytitle}} Wine Category
                                @else
                            <button class="btn btn-primary btn-user btn-block" type="submit">
                                Create Wine Category
                                @endif
                            </button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'block';
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000); // Hide after 2 seconds (2000 milliseconds)
        }
    </script>
    
    
</body>

</html>
@endsection