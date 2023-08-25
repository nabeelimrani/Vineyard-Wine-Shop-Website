@extends('Front-End.Layouts.Main')
@section('main-section')
@push('title')
    <title>Setting - Page</title>
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
                                <h1 class="h4 text-gray-900 mb-4">Update Settings</h1>
                                <hr>
                            </div>
                            <form method="post" action="{{ route('settings.create') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="siteName"
                                        placeholder="Site Name" name="site_name" value="{{$setting->site_name}}">
                                        <input type="hidden" name="id" value="{{$setting->id}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="siteDescription"
                                        placeholder="Site Description" name="site_description" value="{{$setting->site_description}}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" id="contactEmail"
                                            placeholder="Contact Email" name="contact_email" value="{{$setting->contact_email}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="tel" class="form-control form-control-user" id="contactPhone"
                                            placeholder="Contact Phone" name="contact_phone" value="{{$setting->contact_phone}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="address"
                                        placeholder="Address" name="address" value="{{$setting->address}}">
                                </div>
                                <div class="form-group">
                                    <textarea id="aboutUs" name="about_us" placeholder="About Us">{{$setting->about_us}}</textarea>
                                </div>
                              
                                
                                <div class="form-group">
                                  
                                    <textarea id="termsConditions" name="terms_conditions" placeholder="Terms & Conditions">{{$setting->terms_conditions}}</textarea>
                                </div>
                                <div class="form-group">
                                  
                                    <textarea id="refundPolicy" name="refund_policy" placeholder="Refund & Policy">{{$setting->refund_policy}}</textarea>
                                </div>
                                <div class="form-group">
                                    
                                    <input type="text" class="form-control form-control-user" id="openingHours"
                                        placeholder="Opening Hours" name="opening_hours" value="{{$setting->opening_hours}}">
                                </div>

                                <div class="form-group row">

                                <div class="col-sm-4 mb-3 mb-sm-0">
                                   
                                    <input type="text" class="form-control form-control-user" id="facebookLink"
                                        placeholder="Facebook Link" name="facebook_link" value="{{$setting->facebook_link}}">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    
                                    <input type="text" class="form-control form-control-user" id="twitterLink"
                                        placeholder="Twitter Link" name="twitter_link" value="{{$setting->twitter_link}}">
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    
                                    <input type="text" class="form-control form-control-user" id="gmailLink"
                                        placeholder="Gmail Link" name="gmail_link" value="{{$setting->gmail_link}}">
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="popupImage">Popup Image</label>
                                    <input type="file" class="form-control-file" id="popupImage" name="popup_image" accept="image/*" value="{{$setting->popup_image}}">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Submit
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