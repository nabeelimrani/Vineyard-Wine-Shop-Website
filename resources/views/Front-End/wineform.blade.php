@extends('Front-End.Layouts.Main')
@section('main-section')
@push('title')
    <title>Wine Form</title>
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
                                @if(isset($winetitle))
                                <h1 class="h4 text-gray-900 mb-4">{{ $winetitle }} Wine </h1>
                              
                            @else
                                <h1 class="h4 text-gray-900 mb-4">Create Wine</h1>
                              
                            @endif
                                <hr>
                            </div>
                            @if(isset($winetitle))
                            <form method="post" action="{{ route('wine.update') }}" enctype="multipart/form-data">
                                @else
                            <form method="post" action="{{ url('wine/submit') }}" enctype="multipart/form-data">
                                @endif
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        placeholder="Wine Name" name="name" value="{{ isset($wines) ? $wines->name : '' }}">
                                        <input type="hidden" name="winesid" value="{{ isset($wines) ? $wines->id : '' }}">

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user" id="description"
                                        placeholder="Wine Description" name="description">{{ isset($wines) ? $wines->description : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="price"
                                        placeholder="Price" name="price" value="{{ isset($wines) ? $wines->price : '' }}" step="0.01">
                                </div>
                                
                                <div class="form-group">
                                    <label for="category">Select Wine Category</label>
                                    <select class="form-control form-control-user" id="category" name="category">
                                        @foreach ($winecategory as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Wine Image</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" id="status" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                @if(isset($winetitle))
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    {{$winetitle}} Wine
                                    @else
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Create Wine
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