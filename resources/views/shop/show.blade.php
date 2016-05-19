@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	@include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 1])

	<div class="container">
		<h1 class="page-header lazy-header-1 lazy-single-shop-header">Shop 1 <small>Items</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="{{ url('/shops') }}">Shops</a>
			</li>
			<li class="active">
				Shop 1
			</li>
		</ol>
		<div class="row clearfix">
			<div class="col-sm-4">
				<div class="panel panel-default lazy-panel">
						<div class="panel-heading">
							NARROW RESULTS BY:
						</div>
						<div class="panel-body">
							{!! Form::open(['method' => 'GET', 'id' => 'single-shop-filter-form']) !!}
								<div class="form-group">
									{!! Form::text('keyword', null, ['class' => 'form-control', 'placeholder' => 'Search by keyword']) !!}
								</div>
								<div class="form-group">
									{!! Form::select('category', [], null, ['class' => 'form-control', 'placeholder' => 'Select category']) !!}
								</div>
								<div class="form-group">
									{!! Form::select('order_by', [0 => 'Neweset', 1 => 'Popular', 2 => 'Discounted'], null, ['class' => 'form-control', 'placeholder' => 'Order by']) !!}
								</div>
								<div class="form-group">
									{!! Form::select('price_range', [], null, ['class' => 'form-control', 'placeholder' => 'Price Range']) !!}
								</div>
								<div class="form-group text-right">
									{!! Form::submit('SEARCH', ['class' => 'lazy-button lazy-button-primary']) !!}
								</div>
							{!! Form::close() !!}
						</div>
				</div>{{-- /Panel --}}
				@include('templates.partials._sub-sidebar')
			</div>{{-- /Sidebar --}}

			<div class="col-sm-8">
				<div class="row lazy-shop-items-container">
					<div class="col-sm-4">
						<a href="{{ url('/shops/shop-1/items/item-1') }}" class="lazy-single-item">
							@include('shop.partials._discount-sticker')
							@include('shop.partials._item-status')
							<div class="item-thumbnail text-center">
								<img src="{{ url('/images/bg-01.jpg') }}" class="img-response center-block">
							</div>
							<div class="item-info">
								<span class="item-info-name">
									Item 1
								</span>
								<span class="item-info-price">
									&#8369; <span class="original">15,000</span> - 
									<span class="discounted">10,500</span>
								</span>
								<small class="item-info-stocks">
									<span class="fa fa-cubes"></span>
									15 left
								</small>
								<small class="item-info-updated">
									<span class="fa fa-clock-o"></span>
									1 hour ago
								</small>
								<small class="item-info-location">
									<span class="fa fa-map-marker"></span>
									Cagayan de Oro city
								</small>
							</div>{{-- /Item Info --}}
							<a href="#" class="lazy-single-item-bookmark" title="Bookmark this item">
								<span class="fa fa-star"></span>
							</a>
						</a>{{-- /Single item --}}
					</div>{{-- /single item col --}}
				</div>{{-- /Items Container --}}

				@include('templates.partials._pagination')
			</div>{{-- /Col 8 --}}
		</div>{{-- /Row --}}
	</div>{{-- /Container --}}
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection