@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	@include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 2])

	<div class="container">
		
		@include('shop.partials._shop-title', ['subTitle' => 'About Us'])
		<ol class="breadcrumb">
			<li>
				<a href="{{ url('/shops') }}">Shops</a>
			</li>
			<li>
				<a href="{{ url('/shops/shop-1') }}">Shop 1</a>
			</li>
			<li class="active">
				About Us
			</li>
		</ol>
		<div class="row">

			<div class="col-sm-8">
				<div class="lazy-shop-info-container">
					<div class="info-group">
						<p class="info-label">
							Address
						</p>
						<div class="info-control">
							<span class="fa fa-map-marker"></span>
							Corrales Avenue, 9000 Cagayan de Oro City
						</div>
					</div>

					<div class="info-group">
						<p class="info-label">
							Description
						</p>
						<div class="info-control">
							<span class="fa fa-info-circle"></span>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati odio sit unde, facilis quibusdam neque dolorum nihil ipsum aliquid, porro hic laboriosam maiores in, quis. Ducimus aspernatur, doloribus possimus ullam.
						</div>
					</div>

					<div class="info-group">
						<p class="info-label">
							Category
						</p>
						<div class="info-control">
							<span class="fa fa-tag"></span>
							Fashion &amp; Accessories
						</div>
					</div>

					<div class="info-group">
						<p class="info-label">
							Phone
						</p>
						<div class="info-control">
							<span class="fa fa-phone"></span>
							(088) 880 3040
						</div>
					</div>

					<div class="info-group">
						<p class="info-label">
							Email
						</p>
						<div class="info-control">
							<span class="fa fa-envelope-square"></span>
							shop1@email.com
						</div>
					</div>

					<div class="info-group">
						<p class="info-label">
							Website
						</p>
						<div class="info-control">
							<span class="fa fa-globe"></span>
							<a href="{{ url('/') }}">
								http://www.shop1.com
							</a>
						</div>
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