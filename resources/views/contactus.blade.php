@extends('Layouts.Main')
@section('main-section')
@push('title')
	<title>Contact Us</title>
@endpush
<main id="main">
	@if(session('success'))
        <div id="success-message" class="alert alert-success" style="display: none;">
            {{ session('success') }}
        </div>
    @endif
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image:url(images/img75.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">Contact us</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="index-2.html">Home</a></li>
								<li>/</li>
								<li>pages</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- contact sec of the page -->
			<div class="contact-sec container">
				<div class="row">
					<div class="col-xs-12">
						<!-- contact list of the page -->
						<ul class="list-unstyled contact-list text-center">
							<li>
								@if($settings)
								<span class="fa fa-phone"></span>
								<a href="" tel="{{$settings->contact_phone}}">{{$settings->contact_phone}}</a>
							</li>
							<li>
								<span class="fa fa-map-marker"></span>
								<address>{{$settings->address}} <br class="hidden-xs hidden-sm"></address>
							</li>
							<li>
								<span class="fa fa-envelope"></span>
								<a href="mailto:{{$settings->contact_email}}">{{$settings->contact_email}}</a>
							</li>
							@endif
						</ul>
					</div>
				</div>
				<div class="row">
					<!-- header of the page -->
					<header class="col-xs-12 text-center header">
						@if($settings)
						<span class="title fontpinyon">{{$settings->site_name}}</span>
						<h1 class="heading text-uppercase">Contact us</h1>
						<div class="header-img">
							<img src="images/bdr-img.png" alt="image description" class="img-responsive">
						</div>
						<p>{!!$settings->terms_conditions!!}<br class="hidden-xs hidden-sm"> <br class="hidden-xs hidden-sm"></p>
						<!-- socail network of the page -->
						@endif
						<ul class="social-network list-unstyled">
						 	<li><a href="{{$settings->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$settings->twitter_link}}"><i class="fa fa-twitter active"></i></a></li>
							<li><a href="{{$settings->gmail_link}}"><i class="fa fa-google-plus"></i></a></li>
							
						</ul>
					</header>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<h2 class="heading2 text-uppercase">We will love to hear from you</h2>
						<!-- contact form of the page -->
						<form class="contact-form" method="post" action="{{url('/contact/form')}}">
							@csrf
							<fieldset>
								<input class="form-control" type="text" placeholder="Name" name="name">
								<input class="form-control" type="email" placeholder="Email" name="email">
								<input class="form-control" type="text" placeholder="Phone" name="phone">
								<input class="form-control" type="text" placeholder="Subject" name="subject">
								<textarea class="form-control" placeholder="Your Comment" name="comment"></textarea>
								
								
								<button type="submit" class="btn-primary active lg-round text-uppercase">Send Message</button>
							</fieldset>
						</form>
						
						
					</div>
					<div class="col-sm-6">
						<div class="map-holder">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.84222914204!2d74.3194017155843!3d31.501020181375978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904710773389f%3A0x4df4dc1440f48ee1!2sBarkat+Market!5e0!3m2!1sen!2s!4v1544011066667" width="100%" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</main>

<!-- Mirrored from htmlbeans.com/html/vineyard/contactus.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 24 Aug 2023 05:12:47 GMT -->
</html>
<script>
	var successMessage = document.getElementById('success-message');
	if (successMessage) {
		successMessage.style.display = 'block';
		setTimeout(function() {
			successMessage.style.display = 'none';
		}, 2000); // Hide after 2 seconds (2000 milliseconds)
	}
</script>

@endsection