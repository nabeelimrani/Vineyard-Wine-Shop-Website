@extends('Layouts.Main')
@section('main-section')
		<!-- main of the page -->
		@push('title')
			<title>About us</title>
		@endpush
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay"  style="background-image: url('{{ asset('images/img75.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">About us</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="{{url('/')}}">Home</a></li>
								<li>/</li>
								<li>Pages</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- aboutus sec of the page -->
			<section class="aboutus-sec bg-light">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-5 col-lg-6">
							<div class="image-block img-col" data-tilt>
								<img src="{{asset('images/img02.jpg')}}" class="img-responsive" alt="img-description">
							</div>
						</div>
						<div class="col-xs-12 col-md-7 col-lg-6">
							<!-- header of the page -->
							<header class="header text-center">
								<span class="title fontpinyon">Welcome</span>
								<h1 class="heading text-uppercase">{{$setting->site_name}}</h1>
								<div class="header-img">
									<img src="{{asset('images/bdr-img.png')}}" alt="image description" class="img-respnsive">
								</div>
								<p>{!!$setting->about_us!!}</p>
							</header>
							<span class="signature-image"><img src="{{asset('images/sign.png')}}" class="img-responsive" alt="Signature"></span>
						</div>
					</div>
					<div class="row contact-holder">
						<div class="col-xs-12 col-sm-4 text-center">
							<h2 class="heading2">Hotline</h2>
							<a class="sub-title" href="tell:{{$setting->contact_phone}}">{{$setting->contact_phone}}</a>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">We’re Open</h2>
							<time class="sub-title">{{$setting->opening_hours}}</time>
						</div>
						<div class="col-xs-12 col-sm-4 text-center l-bdr">
							<h2 class="heading2">Follow Us</h2>
							<ul class="list-unstyled social-network text-center">
								<li><a href="{{$setting->facebook_link}}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{$setting->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{$setting->gmail_link}}"><i class="fa fa-google-plus"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</section>
		
		</main>
	
</body>

<!-- Mirrored from htmlbeans.com/html/vineyard/aboutus.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 24 Aug 2023 05:12:12 GMT -->
</html>
@endsection