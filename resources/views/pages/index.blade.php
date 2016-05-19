@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	<div id="home-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#home-carousel" data-slide-to="1" class=""></li>
			<li data-target="#home-carousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="{{ url('/images/bg-01.jpg') }}" class="slide-image">
			</div>
			<div class="item">
				<img src="{{ url('/images/bg-02.jpg') }}" class="slide-image">
			</div>
			<div class="item">
				<img src="{{ url('/images/bg-03.jpg') }}" class="slide-image">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3 class="page-header">
					Most Bookmarked Items Today
				</h3>
				<div class="lazy-most-bookmarked-items">
					<ul class="nav nav-pills nav-stacked">
						<li>
							<a href="{{ url('/') }}">
								Lorem Ipsum
								<span class="pull-right">
									54,582,352
								</span>
							</a>
						</li>
						<li>
							<a href="{{ url('/') }}">
								Lorem Ipsum
								<span class="pull-right">
									52,000,352
								</span>
							</a>
						</li>
						<li>
							<a href="{{ url('/') }}">
								Lorem Ipsum
								<span class="pull-right">
									25,545,145
								</span>
							</a>
						</li>
						<li>
							<a href="{{ url('/') }}">
								Lorem Ipsum
								<span class="pull-right">
									540,352
								</span>
							</a>
						</li>
						<li>
							<a href="{{ url('/') }}">
								Lorem Ipsum
								<span class="pull-right">
									534,352
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8">
				<h3 class="page-header">
					Featured Shops
				</h3>
				<div class="row lazy-featured-shops">
					<div class="col-sm-3 lazy-featured-shop">
						<span class="rank rank-first">
							1
						</span>
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 1
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-01.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<span class="rank rank-second">
							2
						</span>
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 2
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-02.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<span class="rank rank-third">
							3
						</span>
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 3
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-03.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 4
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-04.jpg') }}">
						</a>
					</div>
				</div>
				<div class="row lazy-featured-shops">
					<div class="col-sm-3 lazy-featured-shop">
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 5
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-04.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 6
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-03.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 7
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-02.jpg') }}">
						</a>
					</div>
					<div class="col-sm-3 lazy-featured-shop">
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
								<span class="featured-shop-name">
									Shop 8
								</span>
								<small class="featured-shop-location">
									Cagayan de Oro, Philippines
								</small>
							</div>
							<img src="{{ url('/images/bg-01.jpg') }}">
						</a>
					</div>
				</div>
				<div class="text-right">
					<p>
						<a href="{{ url('/shops') }}">
							Browse more &raquo;
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection