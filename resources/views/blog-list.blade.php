@extends('Layouts.Main')
@section('main-section')

@push('title')
	<title>Blog</title>
@endpush
		<!-- main of the page -->
		<main id="main">
			<div class="space bg-black"></div>
			<!-- banner of the page -->
			<section class="banner bg-parallax overlay" style="background-image: url('{{ asset('images/img75.jpg') }}');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center">
							<h2 class="heading text-uppercase fwLight">Blog List</h2>
							<ul class="list-unstyled breadcrumbs">
								<li><a href="index-2.html">Home</a></li>
								<li>/</li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- blog sec of the page -->
			<section class="blog-sec container">
				<div class="row">
					<div class="col-xs-12">
						<!-- blog col of the page -->
						@foreach ($blogs as $blog)
							
						
						<div class="blog-col style3">
							<div class="img-holder">
								<a href="">
									<img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Image Description" class="img-responsive">
								</a>
							</div>
							<div class="txt-holder">
								<time class="time text-uppercase" datetime="{{ $blog->created_at }}">
									{{ $blog->created_at->format('M') }} <span class="day">{{ $blog->created_at->format('d') }}</span>
								</time>
								<h3 class="heading4 fwNormal"><a href="blog-detail-fullwidth.html"></a>{{$blog->title}}</h3>
								<p>{!!$blog->content!!}</p>
								<a href="{{ url('/blog/detail/' . $blog->id) }}" class="read-more text-uppercase">CONTINUE <i class="fa fa-long-arrow-right"></i></a>

							</div>
						</div>
						@endforeach
						<!-- pagination of the page -->
						<ul class="pagination justify-content-center text-center">
							{!! $blogs->links('pagination::bootstrap-4', [
								'input' => false,
								'limit' => 3,
								'prevPageText' => 'Previous',
								'nextPageText' => 'Next',    
							]) !!}
						</ul>
						
						
						
						
						
						
					</div>
				</div>
			</section>
		</main>
</body>

<!-- Mirrored from htmlbeans.com/html/vineyard/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 24 Aug 2023 05:12:37 GMT -->
</html>
@endsection