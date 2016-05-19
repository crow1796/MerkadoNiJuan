<div class="lazy-header-panel" ng-controller="headerPanelController as headerPanelVm">
	<div class="container">
		<strong>
			Welcome, Guest!
		</strong>
		<div class="pull-right">
			<a href="{{ url('/') }}" class="btn btn-link btn-xs lazy-button-link">
				LOGIN
			</a>/
			<a href="{{ url('/') }}" class="btn btn-link btn-xs lazy-button-link">
				REGISTER
			</a>
			<div class="lazy-search-container pull-right">
				{!! Form::open(['method' => 'POST', 'class' => 'lazy-search-form']) !!}
					<div class="lazy-input-group">
						{!! Form::text('search_query', null, ['class' => 'lazy-input', 'placeholder' => 'Search Shops...']) !!}
						{!! Form::submit('SEARCH', ['class' => 'lazy-search-submit']) !!}
					</div>
					<div class="lazy-search-mini-results">
						<ul class="lazy-results">
							<li class="single-result">
								<a href="{{ url('/') }}">
									<div class="result-thumbnail-container">
										<img class="result-thumbnail" src="{{ url('/images/bg-01.jpg') }}" alt="BG 01">
									</div>
									<span class="result-title">
										Lorem Ipsum dolor
										<small class="result-location">Cagayan de Oro, Philippines</small>
									</span>
								</a>
							</li>
							<li class="single-result">
								<a href="{{ url('/') }}">
									<div class="result-thumbnail-container">
										<img class="result-thumbnail" src="{{ url('/images/bg-03.jpg') }}" alt="BG 01">
									</div>
									<span class="result-title">
										Lorem Ipsum dolor
										<small class="result-location">Cagayan de Oro, Philippines</small>
									</span>
								</a>
							</li>
							<li class="single-result">
								<a href="{{ url('/') }}">
									<div class="result-thumbnail-container">
										<img class="result-thumbnail" src="{{ url('/images/bg-02.jpg') }}" alt="BG 02">
									</div>
									<span class="result-title">
										Lorem Ipsum dolor
										<small class="result-location">Cagayan de Oro, Philippines</small>
									</span>
								</a>
							</li>
							<li class="single-result">
								<a href="{{ url('/') }}">
									<div class="result-thumbnail-container">
										<img class="result-thumbnail" src="{{ url('/images/bg-02.jpg') }}" alt="BG 02">
									</div>
									<span class="result-title">
										Lorem Ipsum dolor
										<small class="result-location">Cagayan de Oro, Philippines</small>
									</span>
								</a>
							</li>
							<li class="single-result">
								<a href="{{ url('/') }}">
									<div class="result-thumbnail-container">
										<img class="result-thumbnail" src="{{ url('/images/bg-02.jpg') }}" alt="BG 02">
									</div>
									<span class="result-title">
										Lorem Ipsum dolor
										<small class="result-location">Cagayan de Oro, Philippines</small>
									</span>
								</a>
							</li>
							<li class="see-more">
								<a href="{{ url('/') }}">
									<span>See more &raquo;</span>
								</a>
							</li>
						</ul>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default lazy-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" data-toggle="collapse" data-target="#main-navbar" class="navbar-toggle">
				<span class="sr-only">Toggle Navigation</span>
				<span class="fa fa-navicon"></span>
			</button>
			<a href="{{ url('/') }}" class="navbar-brand">
				BRAND
			</a>
		</div>

		<div class="collapse navbar-collapse" id="main-navbar">
			<ul class="nav navbar-nav navbar-right">
				<li role="presentation">
					<a href="{{ url('/') }}">
						<strong>HOME</strong>
					</a>
				</li>
				<li role="presentation">
					<a href="{{ url('/shops') }}">
						<strong>BROWSE SHOPS</strong>
					</a>
				</li>
			</ul>
		</div>{{-- /Navbar collapse --}}
	</div>{{-- /Container --}}
</nav>{{-- /Navbar --}}