<div class="shop-banner-container" ng-controller="shopBannerController as shopBannerVm">
	<div class="shop-carousel">
		<div id="shop-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item">
					<img src="{{ url('/images/bg-01.jpg') }}" class="slide-image">
				</div>
				<div class="item">
					<img src="{{ url('/images/bg-02.jpg') }}" class="slide-image">
				</div>
				<div class="item active">
					<img src="{{ url('/images/bg-03.jpg') }}" class="slide-image">
				</div>
			</div>
			<a class="left carousel-control" href="#shop-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#shop-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>{{-- /Carousel --}}
	<div class="lazy-shop-display-image-wrapper">
		@include('shop.partials._shop-tabs', ['shop' => 'shop', 'active' => $active])
		<div class="lazy-shop-display-image-container">
			<a href="#lazy-shop-dp-box" data-toggle="lazy-box">
				<img src="{{ url('/images/bg-01.jpg') }}" alt="Shop 1" class="lazy-shop-display-image img-responsive">
			</a>
			{{-- <div id="lazy-shop-settings-dropdown" class="dropdown">
				<a href="#" data-toggle="dropdown">
					<span class="fa fa-cog"></span>
					Shop Settings
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Manage Info</a>
					</li>
				</ul>
			</div> --}}
		</div>
	</div>
</div>

@include('templates.partials._lazy-box', ['boxId' => 'lazy-shop-dp-box'])
