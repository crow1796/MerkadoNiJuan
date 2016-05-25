@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	@include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 4])

	<div class="container">

		@include('shop.partials._shop-title', ['subTitle' => 'Reviews'])
		<ol class="breadcrumb">
			<li>
				<a href="{{ url('/shops') }}">Shops</a>
			</li>
			<li>
				<a href="{{ url('/shops/shop-1') }}">Shop 1</a>
			</li>
			<li class="active">
				Reviews
			</li>
		</ol>
		<div class="row">

			<div class="col-sm-8">
				<div class="lazy-shop-reviews-container" ng-controller="shopReviewsController as shopReviewsVm">
					<div class="lazy-shop-reviews">
						<div class="lazy-shop-single-review">
							<div class="reviewer-info">
								<a href="#">
									<img src="{{ url('/images/bg-03.jpg') }}" class="reviewer-thumbnail">
								</a>
								<a href="#" class="reviewer-name">
									Admin Admin
								</a>
								<small class="reviewed-at">
									May 19, 2016
								</small>
								<span class="reviewer-rate">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-half-o"></span>
									<span class="fa fa-star-o"></span>
								</span>
							</div>
							<div class="review-comment">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque velit fugiat voluptates mollitia accusamus labore veniam aperiam nisi dolorem placeat adipisci cum dolore qui temporibus, recusandae suscipit dicta quisquam obcaecati.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								<div class="comment-read-more">
									More <span class="fa fa-angle-double-down"></span>
								</div>
							</div>
						</div>{{-- /Single Review --}}
						<div class="lazy-shop-single-review">
							<div class="reviewer-info">
								<a href="#">
									<img src="{{ url('/images/bg-02.jpg') }}" class="reviewer-thumbnail">
								</a>
								<a href="#" class="reviewer-name">
									Wendy
								</a>
								<small class="reviewed-at">
									May 19, 2016
								</small>
								<span class="reviewer-rate">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-half-o"></span>
									<span class="fa fa-star-o"></span>
								</span>
							</div>
							<div class="review-comment">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								<div class="comment-read-more">
									More <span class="fa fa-angle-double-down"></span>
								</div>
							</div>
						</div>{{-- /Single Review --}}
						<div class="lazy-shop-single-review">
							<div class="reviewer-info">
								<a href="#">
									<img src="{{ url('/images/bg-04.jpg') }}" class="reviewer-thumbnail">
								</a>
								<a href="#" class="reviewer-name">
									Natsu
								</a>
								<small class="reviewed-at">
									May 19, 2016
								</small>
								<span class="reviewer-rate">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-half-o"></span>
									<span class="fa fa-star-o"></span>
								</span>
							</div>
							<div class="review-comment">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque velit fugiat voluptates mollitia accusamus labore veniam aperiam nisi dolorem placeat adipisci cum dolore qui temporibus, recusandae suscipit dicta quisquam obcaecati.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt fugiat non, minima laborum provident placeat eos repellat atque odit. Aperiam facere eum reprehenderit maiores dignissimos quos. Commodi vitae, molestiae illum.
								<div class="comment-read-more">
									More <span class="fa fa-angle-double-down"></span>
								</div>
							</div>
						</div>{{-- /Single Review --}}
						@include('templates.partials._pagination')
					</div>
				</div>
			</div>{{-- /Col 8 --}}
			<div class="col-sm-4">
				@include('templates.partials._sub-sidebar')
			</div>{{-- /Sidebar --}}
		</div>{{-- /Row --}}
	</div>{{-- /Container --}}
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection