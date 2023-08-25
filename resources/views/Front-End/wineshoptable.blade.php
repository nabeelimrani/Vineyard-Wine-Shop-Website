@extends('Front-End.Layouts.Main')
@section('main-section')
                
@push('title')
    <title>Blog Table</title>
@endpush
<style>
    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #f8f9fa;
      border-bottom: 1px solid #d1d3e2;
    }
    
    .font-weight-bold {
      font-weight: bold;
      font-size: 20px;
    }
    
    .text-primary {
      color: #007bff;
    }
    
    .blog-button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      cursor: pointer;
    }
    table {
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
}

img {
  width: 80px; /* Fixed width for the image */
  height: 50px; /* Fixed height for the image */
  object-fit: cover; /* Maintain aspect ratio and cover the space */
}
    </style>
                <div class="container-fluid">
                    @if(session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger" id="error-alert">
                        {{ session('error') }}
                    </div>
                @endif
                
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Wine</h1>
                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Wine Table</h6>
                            <a href="{{url('wine/form')}}"><button class="blog-button">Add Wine</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($wines as $winesdata)
                                        <tr>
                                            <td>{{$winesdata->name}}</td>
                                            <td>{!!$winesdata->description!!}</td>
                                            <td>{{$winesdata->price}}</td>
                                            
                                            <td>
                                                @if ($winesdata->category)
                                                    {{ $winesdata->category->title }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td><img src="{{ asset('storage/' . $winesdata->image) }}" alt="{{$winesdata->title}}"></td>

                                            <td>
                                                @if ($winesdata->status === 'active')
                                                  <span class="badge badge-success">Active</span>
                                                @elseif ($winesdata->status === 'inactive')
                                                  <span class="badge badge-danger">Inactive</span>
                                                @endif
                                              </td>
                                              <td>
                                                <form action="{{url('/edit/wine')}}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <input type="hidden" name="winesid" value="{{$winesdata->id}}">
                                                    <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> </button>
                                                  </form>
                                               
                                                <form action="{{url('/delete/wines')}}" method="POST" style="display: inline;">
                                                  @csrf
                                                  <input type="hidden" name="winesid" value="{{$winesdata->id}}">
                                                  <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                                </form>
                                              </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
   
    <!-- Logout Modal-->
   

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('front-end/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front-end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('front-end/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('front-end/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('front-end/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('front-end/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('front-end/js/demo/datatables-demo.js')}}"></script>
    <script>
        // Auto-hide success alert after 3 seconds
        setTimeout(function() {
            $('#success-alert').fadeOut('fast');
        }, 3000);
    
        // Auto-hide error alert after 3 seconds
        setTimeout(function() {
            $('#error-alert').fadeOut('fast');
        }, 3000);
    </script>
</body> 

</html>
@endsection