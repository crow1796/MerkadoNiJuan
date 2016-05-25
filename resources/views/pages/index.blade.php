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
				</div>{{-- /Featured Shops --}}
				<h3 class="page-header">
					New Shops
				</h3>
				<div class="row lazy-featured-shops">
					<div class="col-sm-3 lazy-featured-shop">
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
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
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
							Browse shops &raquo;
						</a>
					</p>
				</div>{{-- /New Shops --}}
				<h3 class="page-header">
					Random Shops
				</h3>
				<div class="row lazy-featured-shops">
					<div class="col-sm-3 lazy-featured-shop">
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
						<a href="{{ url('/') }}" class="text-center">
							<div class="slide-hover">
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
							Browse shops &raquo;
						</a>
					</p>
				</div>{{-- /Random Shops --}}
			</div>
			<div class="col-sm-4 lazy-home-sidebar">
				<div class="panel panel-default lazy-panel">
					<div class="panel-heading">
						Featured Items
					</div>
					<div class="panel-body">
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
				</div>
				<div class="panel panel-default lazy-panel" {{-- ng-controller="itemFeedController as itemFeedVm" --}}>
					<div class="panel-heading">
						Item Feed
					</div>
					<div class="panel-body lazy-item-feed-body">
						<div class="lazy-item-feed-container">
							<div class="item-feed">
								<a href="{{ url('/') }}" class="item-link">
									View Item &raquo;
								</a>
								<div class="item-feed-user">
									<div class="user-thumbnail-container">
										<img src="{{ url('/images/bg-01.jpg') }}" class="user-thumbnail">
										<span class="user-name">
											Admin admin
										</span>
										<small class="user-posted_at">
											15 seconds ago
										</small>
									</div>
								</div>
								<div class="item-feed-content">
									<div class="item-name">
										Item 1 <div class="badge badge-alert">50% OFF</div>
									</div>
									<div class="item-price">
										@{{ 15000 | currency:'&#8369 ' }}
									</div>
									<div class="item-description">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
									<div class="item-first-image">
										<img src="{{ url('/images/bg-03.jpg') }}">
									</div>
								</div>
							</div>{{-- /Item Feed --}}
							<div class="item-feed">
								<a href="{{ url('/') }}" class="item-link">
									View Item &raquo;
								</a>
								<div class="item-feed-user">
									<div class="user-thumbnail-container">
										<img src="{{ url('/images/bg-01.jpg') }}" class="user-thumbnail">
										<span class="user-name">
											Admin admin
										</span>
										<small class="user-posted_at">
											15 seconds ago
										</small>
									</div>
								</div>
								<div class="item-feed-content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae sunt ab id ducimus culpa, magnam ut perferendis reiciendis saepe, distinctio neque, esse perspiciatis quia reprehenderit enim in numquam! Dolorum, ab!
									<img src="{{ url('/images/bg-01.jpg') }}">
								</div>
							</div>{{-- /Item Feed --}}
							<div class="item-feed">
								<a href="{{ url('/') }}" class="item-link">
									View Item &raquo;
								</a>
								<div class="item-feed-user">
									<div class="user-thumbnail-container">
										<img src="{{ url('/images/bg-04.jpg') }}" class="user-thumbnail">
										<span class="user-name">
											Lorem admin
										</span>
										<small class="user-posted_at">
											15 seconds ago
										</small>
									</div>
								</div>
								<div class="item-feed-content">
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									<img src="{{ url('/images/bg-04.jpg') }}">
								</div>
							</div>{{-- /Item Feed --}}
						</div>
					</div>
				</div>
			</div>{{-- Sidebar --}}
		</div>
	</div>
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection