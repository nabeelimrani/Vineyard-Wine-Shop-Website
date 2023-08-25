@extends('Front-End.Layouts.Main')
@section('main-section')
                
@push('title')
    <title>Contact Table</title>
@endpush
<style>
  
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
                    <h1 class="h3 mb-2 text-gray-800">Contact Us</h1>
                  

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Subject</th>
                                            <th>Comment</th>
                                            <th>Status</th>
                                            <th colspan="2" class="collaspe-2" data-toggle="collapse" data-target=".actions-collapse">
                                                Actions
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($contact as $contactdata)
                                        <tr>
                                            <td>{{$contactdata->name}}</td>
                                            <td>{{$contactdata->email}}</td>
                                            <td>{{$contactdata->phone}}</td>
                                            
                                            <td>
                                               {{$contactdata->subject}}
                                            </td>
                                            <td>{{$contactdata->comment}}</td>

                                            <td>
                                                <span class="badge badge-{{ $contactdata->status === 'responded' ? 'success' : 'danger' }}">
                                                    {{ ucfirst(str_replace('_', ' ', $contactdata->status)) }}
                                                </span>
                                              </td>
                                              <td>
                                                @if(isset($contactdata))
                                                    <form action="{{url('change/status')}}" method="post">
                                                        @csrf
                                                        <select name="statusname" class="form-control">
                                                            <option value="not_responded">Not Responded</option>
                                                            <option value="responded">Responded</option>
                                                        </select>
                                                        <input type="hidden" name="contactid" value="{{$contactdata->id}}">
                                                        <button type="submit" class="btn btn-primary">Change</button>
                                                    </form>
                                                @endif
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