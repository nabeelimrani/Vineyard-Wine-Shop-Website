@extends('Layouts.Main')
@section('main-section')

@push('title')
	<title>Wine Shop</title>
@endpush
		<!-- main of the page -->
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image:url(images/img75.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">WINE SHOP</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="{{url('/')}}">Home</a></li>
								<li>/</li>
								<li>Wine </li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- shop sec of the page -->
			<section class="shop-sec">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- filter list of the page -->
							<ul class="list-unstyled filter-list text-center">
							<!-- Loop through categories -->
							@foreach($categories as $category)
							<li class="active">
								<button class="btn btn-primary" id="" >{{$category->title}}</button>
							</li>
		@endforeach
							</ul>
						</div>
					</div>
					<div class="row">
						<!-- content of the page -->
						<article id="content" class="col-xs-12 col-md-12">
							@foreach ($wines as $wine)
								
						
							<div class="col-xs-12 col-sm-3">
								<!-- feature col of the page -->
								<div class="feature-col">
									<div class="img-holder text-center">
										<a href="shop-detail.html"><img src="{{asset('storage/'. $wine->image)}}" alt="image description" class="img-responsive"></a>
									</div>
									<div class="txt-wrap">
										<h2 class="heading3"><a href="shop-detail.html">{{$wine->name}}</a></h2>
										<footer class="footer">
											<ul class="list-unstyled rating-list pull-left">
												<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-star-o"></i></a></li>
												<li><a href="javascript:void(0);"><i class="fa fa-star-o"></i></a></li>
											</ul>
											<strong class="price pull-right">$ {{$wine->price}}</strong>
										</footer>
									</div>
									<ul class="list-unstyled text-center social-network">
										<li><a href="javascript:void(0);"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
										<li><a href="compare.html"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
										<li><a href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="shopping-cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
							
							
							@endforeach
							<ul class="pagination justify-content-center text-center">
								{{ $wines->links('pagination::bootstrap-4', [
								'input' => false,
								'limit' => 3,
								'prevPageText' => 'Previous',
								'nextPageText' => 'Next',    
							]) }}
							</ul>
						
						</article>
						
					</div>
				</div>
			</section>
		</main>
</body>

<!-- Mirrored from htmlbeans.com/html/vineyard/shop.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 24 Aug 2023 05:12:04 GMT -->
</html>
@endsection