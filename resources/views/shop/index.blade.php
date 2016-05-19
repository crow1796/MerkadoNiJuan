@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	<div class="container">
		<h1 class="page-header">Browse Shops</h1>
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default lazy-panel">
						<div class="panel-heading">
							NARROW RESULTS BY:
						</div>
						<div class="panel-body">
							{!! Form::open(['method' => 'GET', 'id' => 'shop-filter-form']) !!}
								<div class="form-group">
									{!! Form::select('province', [], null, ['class' => 'form-control', 'placeholder' => 'Select province']) !!}
								</div>
								<div class="form-group">
									{!! Form::select('city', [], null, ['class' => 'form-control', 'placeholder' => 'Select city']) !!}
								</div>
								<div class="form-group">
									{!! Form::select('category', [], null, ['class' => 'form-control', 'placeholder' => 'Select category']) !!}
								</div>
								{{-- <div class="form-group">
									{!! Form::label('show', 'Display:') !!}
									<label for="show_shops">
										<input type="checkbox" name="show_shops" id="show_shops">
										Shops
									</label>
									<label for="show_items">
										<input type="checkbox" name="show_items" id="show_items">
										Items
									</label>
								</div> --}}
								<div class="form-group text-right">
									{!! Form::submit('SEARCH', ['class' => 'lazy-button lazy-button-primary']) !!}
								</div>
							{!! Form::close() !!}
						</div>
				</div>
			</div>{{-- Sidebar --}}
			<div class="col-sm-8">
				<div class="row lazy-shops-container">
					<div class="col-sm-4">
						<a href="{{ url('/shops/shop-1') }}" class="lazy-single-shop">
							{{-- Sale Sticker --}}
							@include('shop.partials._sale-sticker')

							<div class="shop-thumbnail text-center">
								<img src="{{ url('/images/bg-01.jpg') }}" class="img-response center-block">
							</div>
							<div class="shop-info">
								<span class="shop-info-name">
									Shop 1
								</span>
								<small class="shop-info-updated">
									<span class="fa fa-clock-o"></span>
									1 hour ago
								</small>
								<small class="shop-info-location">
									<span class="fa fa-map-marker"></span>
									Cagayan de Oro city
								</small>
							</div>
						</a>
					</div>
				</div>

				@include('templates.partials._pagination')
			</div>{{-- Shops/Items grid --}}
		</div>
	</div>
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection