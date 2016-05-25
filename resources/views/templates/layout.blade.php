<!DOCTYPE html>
<html lang="en">
<head>
	@include('templates.partials._assets', ['title' => $title])
</head>
<body {!! isset($bodyId)? 'id="' . $bodyId . '"': '' !!} ng-app="lazymarket">
	<div id="page-wrapper">
		@yield('header')

		@yield('content')
		
		@yield('footer')

		@if(!isset($bodyId))
			@include('templates.partials._contact-list')
			{{-- @include('templates.partials._chatboxes') --}}
		@endif
		@include('templates.partials._notifications-container')
	</div>
</body>
</html>