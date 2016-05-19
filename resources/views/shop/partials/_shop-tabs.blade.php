<div class="container">
	<ul class="nav nav-tabs lazy-shop-information-tabs">
		<li {{ $active == 1 ? 'class=active' : '' }}>
			<a href="{{ url('/shops/shop-1') }}">
				<span class="fa fa-cube"></span>
				Items
			</a>
		</li>
		<li {{ $active == 2 ? 'class=active' : '' }}>
			<a href="{{ url('/shops/shop-1/about-us') }}">
				<span class="fa fa-user"></span>
				About Us
			</a>
		</li>
		<li {{ $active == 3 ? 'class=active' : '' }}>
			<a href="{{ url('/shops/shop-1/settings') }}">
				<span class="fa fa-cog"></span>
				Shop Settings
			</a>
		</li>
	</ul>
</div>