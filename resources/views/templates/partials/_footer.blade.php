<div class="footer-container">
	<div class="sub-footer-newsletter">
		<div class="container">
			<h3 class="text-center lazy-header lazy-header-3">
				Recieve newsletters from Lazy Market!
			</h3>
			<div class="newsletter-form-container row">
				<div class="col-md-4 col-md-offset-4">
					{!! Form::open(['method' => 'POST', 'class' => 'form-horizontal lazy-form-horizontal']) !!}
						<div class="lazy-input-group">
							{!! Form::email('email', null, ['class' => 'form-control form-input', 'placeholder' => 'Your e-mail address']) !!}
							{!! Form::submit('SUBSCRIBE', ['class' => 'lazy-newsletter-submit']) !!}
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul>
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
						<li>
							<a href="{{ url('/shops') }}">Shops</a>
						</li>
						<li>
							<a href="{{ url('/') }}">Featured Shops</a>
						</li>
						<li>
							<a href="{{ url('/') }}">Featured Items</a>
						</li>
						<li>
							<a href="{{ url('/faqs') }}">FAQs</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li>
							<a href="{{ url('/register') }}">Create account</a>
						</li>
						<li>
							<a href="{{ url('/login') }}">Sign In</a>
						</li>
						<li>
							<a href="{{ url('/terms-and-conditions') }}">Terms &amp; Conditions</a>
						</li>
						<li>
							<a href="{{ url('/report') }}">Report</a>
						</li>
						<li>
							<a href="{{ url('/sitemap') }}">Sitemap</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p id="copyright">
				&copy; LazyMarket 2016
			</p>
		</div>
	</div>
</div>