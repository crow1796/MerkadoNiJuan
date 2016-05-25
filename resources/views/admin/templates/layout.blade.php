<!DOCTYPE html>
<html lang="en">
<head>
	@include('templates.partials._assets', ['title' => $title])
</head>
<body {!! isset($bodyId)? 'id="' . $bodyId . '"': '' !!} ng-app="lazymarket-admin">
	<div id="admin-page-wrapper" ng-controller="adminDashboardController as admindashboardVm">
		<nav class="navbar navbar-default navbar-fixed-top lazy-navbar" role="navigation">
			<button type="button" data-target="#admin-page-content" id="lazy-sidebar-admin-toggle">
				<span class="fa fa-navicon"></span>
			</button>
			<div class="container">
				<a href="{{ url('/admin/logout') }}" class="btn btn-sm lazy-btn-default navbar-btn pull-right" id="admin-logout-btn">
					<strong>LOGOUT</strong>
				</a>
			</div>{{-- /Container --}}
		</nav>{{-- /Navbar --}}
		@yield('content')
	</div>
</body>
</html>