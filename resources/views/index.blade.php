@extends('Layouts.Main')
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@push('title')
	<title>VINEYARD - HOME</title>
	@endpush
	
</head>
<body>
	<main id="main">
		<!-- main slider of the page -->
		<div class="main-slider">
			<!-- slide of the page -->
			<div class="slide bg-full" style="background-image:url(images/img01.jpg);">
				<div class="holder">
					<div class="b-logo">
						<img src="images/logo4.png" class="img-responsive" alt="banner-logo">
					</div>
					<a href="javascript:void(0);" class="btn-primary active lg-round text-uppercase">show now</a>
				</div>
			</div>
			<!-- slide of the page -->
			<div class="slide bg-full" style="background-image:url(images/img01.jpg);">
				<div class="holder">
					<div class="b-logo">
						<img src="images/logo4.png" class="img-responsive" alt="banner-logo">
					</div>
					<a href="javascript:void(0);" class="btn-primary active lg-round text-uppercase">show now</a>
				</div>
			</div>
		</div>
		<!-- aboutus sec of the page -->
		<section class="aboutus-sec bg-light">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-5 col-lg-6">
						<div class="image-block img-col" data-tilt>
							<img src="images/img02.jpg" class="img-responsive" alt="img-description">
						</div>
					</div>
					<div class="col-xs-12 col-md-7 col-lg-6">
						<!-- header of the page -->
						<header class="header text-center wow fadeInUp" data-wow-delay="0.4s">
							<span class="title fontpinyon">Welcome</span>
							<h1 class="heading text-uppercase">{{$settings->site_name}}</h1>
							<div class="header-img">
								<img src="images/bdr-img.png" alt="image description" class="img-respnsive">
							</div>
							<p>{!!$settings->site_description!!}</p>
						</header>
						<span class="signature-image"><img src="images/sign.png" class="img-responsive" alt="Signature"></span>
					</div>
				</div>
				<div class="row contact-holder">
					<div class="col-xs-12 col-sm-4 text-center">
						<h2 class="heading2">Hotline</h2>
						<a class="sub-title" href="tell:{{$settings->contact_phone}}">{{$settings->contact_phone}}</a>
					</div>
					<div class="col-xs-12 col-sm-4 text-center l-bdr">
						<h2 class="heading2">We’re Open</h2>
						<time class="sub-title">{{$settings->opening_hours}}</time>
					</div>
					<div class="col-xs-12 col-sm-4 text-center l-bdr">
						<h2 class="heading2">Follow Us</h2>
						<ul class="list-unstyled social-network text-center">
							<li><a href="{{$settings->favebook_link}}"><i class="fa fa-facebook"></i></a></li>
							<li><a href="{{$settings->twitter_link}}"><i class="fa fa-twitter"></i></a></li>
							<li><a href="{{$settings->gmail_link}}"><i class="fa fa-google-plus"></i></a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- feature sec of the page -->
		<div class="feature-sec container">
			<div class="row">
				<!-- header of the page -->
				<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
					<span class="title fontpinyon">Vineyard</span>
					<h1 class="heading text-uppercase">FEATURED WINES</h1>
					<div class="header-img">
						<img src="images/bdr-img.png" alt="image description" class="img-responsive">
					</div>
				</header>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<!-- filter list of the page -->
					<ul class="list-unstyled filter-list text-center">
					<!-- Loop through categories -->
					<ul id="category-list">
						@foreach($categories as $category)
						<li>
							<button class="btn btn-primary category-button" data-category-id="{{ $category->id }}">{{ $category->title }}</button>
						</li>
						@endforeach
					</ul>
					

					</ul>
				</div>
			</div>
			<div class="row">
				<!-- feature holder of the page -->
				<div id="feature-holder">
					<div class="grid-sizer"></div>
					@foreach($wines as $wine)
					<div class="col-xs-12 col-sm-6 col-md-3 item-col roes">
						<!-- Feature column of the page -->
						<div class="feature-col">
							<div class="img-holder text-center">
								<a href="shop-detail.html">
									<img src="{{ asset('storage/' . $wine->image) }}" alt="Wine Image" class="img-responsive">
								</a>
							</div>
							<div class="txt-wrap">
								<h2 class="heading3">
									<a href="shop-detail.html">
										<strong>{{ $wine->name }}</strong>
									</a>
								</h2>
								<p>{!! $wine->description !!}</p>
								<footer class="footer">
									<strong class="price pull-right">${{ $wine->price }}</strong>
								</footer>
							</div>
							<div class="action-buttons text-center">
								<ul class="list-unstyled text-center social-network">
									<h2 class="heading3">
										<a href="shop-detail.html">
											<strong>{{ $wine->name }}</strong>
										</a>
									</h2>
								
									<footer class="footer">
										<strong class="price pull-right">${{ $wine->price }}</strong>
									</footer>
									
								</ul>
							</div>
						</div>
					</div>
					
					@endforeach
				</div>
				<div class="col-xs-12 text-center">
					<a href="shop.html" class="btn-primary lg-round text-uppercase">View All</a>
				</div>
		
		<!-- tomatin sec of the page -->
		
		<!-- small wine of the page -->
		<section class="small-product container">
			<div class="row">
				<h3 class="heading5">NEW ARRIVAL</h3>
				@foreach($wines as $wine)
				<div class="col-xs-12 col-sm-4">
					
					<!-- feature col of the page -->
					<div class="feature-col feature-col2">
						<div class="img-holder text-center pull-left">
							<a href="shop-detail.html"><img src="{{ asset('storage/' . $wine->image) }}" alt="{{ $wine->name }}" class="img-responsive"></a>
						</div>
						<div class="txt-wrap pull-left">
							<h2 class="heading3"><a href="shop-detail.html">{{ $wine->name }}</a></h2>
							<footer class="footer">
								
								<strong class="price">${{ $wine->price }}</strong>
								<ul class="list-unstyled text-center social-network">
									<li><a href="javascript:void(0);"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
									
								</ul>
							</footer>
						</div>
					</div>
				</div>
				@endforeach
		
		</section>
	
		<section class="blog-sec container">
			<div class="row">
				<!-- header of the page -->
				<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
					<span class="title fontpinyon">{{$settings->site_name}}</span>
					<h1 class="heading text-uppercase">blog wines</h1>
					<div class="header-img">
						<img src="images/bdr-img.png" alt="image description" class="img-responsive">
					</div>
				</header>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<!-- blog col of the page -->
					<div class="blog-col">
						<div class="txt-holder">
							<time class="time text-uppercase" datetime="{{ $settings->created_at }}">
								{{ $settings->created_at->format('M') }} <span class="day">{{ $settings->created_at->format('d') }}</span>
							</time>
							<h3 class="heading2"><a href="blog-detail-fullwidth.html">{{$settings->site_description}}</a></h3>
							
						</div>
						<div class="img-holder">
							<a href="blog-detail-fullwidth.html"><img src="images/img22.jpg" alt="image description" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<!-- blog col of the page -->
					<div class="blog-col style2">
						<div class="img-holder">
							<a href="blog-detail-fullwidth.html"><img src="images/img23.jpg" alt="image description" class="img-responsive"></a>
						</div>
						<div class="txt-holder text-right">
							<time class="time text-uppercase" datetime="{{ $settings->created_at }}">
								{{ $settings->created_at->format('M') }} <span class="day">{{ $settings->created_at->format('d') }}</span>
							</time>
							<h3 class="heading2"><a href="blog-detail-fullwidth.html">{{$settings->site_description}}</a></h3>
							
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<!-- blog col of the page -->
					<div class="blog-col">
						<div class="txt-holder">
							<time class="time text-uppercase" datetime="{{ $settings->created_at }}">
								{{ $settings->created_at->format('M') }} <span class="day">{{ $settings->created_at->format('d') }}</span>
							</time>
							<h3 class="heading2"><a href="blog-detail-fullwidth.html">{{$settings->site_description}}</a></h3>
							
						</div>
						<div class="img-holder">
							<a href="blog-detail-fullwidth.html"><img src="images/img24.jpg" alt="image description" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<!-- blog col of the page -->
					<div class="blog-col style2">
						<div class="img-holder">
							<a href="blog-detail-fullwidth.html"><img src="images/img25.jpg" alt="image description" class="img-responsive"></a>
						</div>
						<div class="txt-holder text-right">
							<time class="time text-uppercase" datetime="{{ $settings->created_at }}">
								{{ $settings->created_at->format('M') }} <span class="day">{{ $settings->created_at->format('d') }}</span>
							</time>
							<h3 class="heading2"><a href="blog-detail-fullwidth.html">{{$settings->site_description}}</a></h3>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>	

@endsection