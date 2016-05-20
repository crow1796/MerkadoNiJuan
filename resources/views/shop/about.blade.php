@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	@include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 2])

	<div class="container">
	
		@include('shop.partials._shop-title', ['subTitle' => 'About Us'])

		<div class="row">
			<div class="col-sm-4">
				@include('templates.partials._sub-sidebar')
			</div>{{-- /Sidebar --}}

			<div class="col-sm-8">
			
			</div>{{-- /Col 8 --}}
		</div>{{-- /Row --}}
	</div>{{-- /Container --}}
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection