@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	@include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 3])

	<div class="container">
	
		@include('shop.partials._shop-title', ['subTitle' => 'Settings'])
		<ol class="breadcrumb">
			<li>
				<a href="{{ url('/shops') }}">Shops</a>
			</li>
			<li>
				<a href="{{ url('/shops/shop-1') }}">Shop 1</a>
			</li>
			<li class="active">
				Settings
			</li>
		</ol>
		<div class="row">

			<div class="col-sm-8">
				<div class="lazy-shop-info-container">
					<div class="info-group">
						<h3 class="info-label">
							Shop Visual Settings
						</h3>
						<div class="info-control">
							{!! Form::open(['method' => 'POST', 'url' => url('/'), 'files' => true]) !!}
							<div class="info-group">
								<p class="info-label">
									Basic Settings
								</p>
								<div class="info-control">
									<div class="form-group">
										<label for="shop_visibility" class="control-label">
											<input type="checkbox" name="shop_visibility" id="shop_visibility">
											Public
											<span title="Your shop will be visible to guests or non-members of the website." data-placement="top" data-toggle="tooltip" class="fa fa-question-circle">
											</span>
										</label>
									</div>
									<div class="form-group">
										<label for="name_visibility" class="control-label">
											<input type="checkbox" name="name_visibility" id="name_visibility">
											Display Owner Name
											<span title="Your name will be visible to others." data-placement="top" data-toggle="tooltip" class="fa fa-question-circle">
											</span>
										</label>
									</div>
									<div class="form-group">
										{!! Form::label('shop_name', 'Shop Name') !!}
										{!! Form::text('shop_name', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Your Shop Name']) !!}
									</div>
								</div>
							</div>{{-- /Basic Settings --}}
							<div class="info-group">
								<p class="info-label">
									Home Slider
								</p>
								<div class="info-control">
									<div class="form-group">
										{!! Form::label('slide_1', 'Slide 1', ['class' => 'control-label']) !!}
										{!! Form::file('slide_1') !!}
									</div>
									<div class="form-group">
										{!! Form::label('slide_2', 'Slide 2', ['class' => 'control-label']) !!}
										{!! Form::file('slide_2') !!}
									</div>
									<div class="form-group">
										{!! Form::label('slide_3', 'Slide 3', ['class' => 'control-label']) !!}
										{!! Form::file('slide_3') !!}
									</div>
								</div>
							</div>{{-- /Slider Banner Settings --}}
							<div class="info-group" ng-controller="featuredItemsSettingsController as featuredItemsSettingsVm">
								<p class="info-label">
									Featured Items	
								</p>
								<div class="info-control">
									<div class="form-group row">
										<div class="col-sm-4">
											{!! Form::label('item_1', 'Item 1 ', ['class' => 'control-label']) !!}
											{!! Form::select('item_1', [], [], ['class' => 'form-control lazy-form-control', 'placeholder' => 'Featured Item 1']) !!}
										</div>
										<div class="col-sm-4">
											{!! Form::label('item_2', 'Item 2 ', ['class' => 'control-label']) !!}
											{!! Form::select('item_1', [], [], ['class' => 'form-control lazy-form-control', 'placeholder' => 'Featured Item 1']) !!}
										</div>
										<div class="col-sm-4">
											{!! Form::label('item_3', 'Item 3 ', ['class' => 'control-label']) !!}
											{!! Form::select('item_1', [], [], ['class' => 'form-control lazy-form-control', 'placeholder' => 'Featured Item 1']) !!}
										</div>
									</div>
								</div>
							</div>
							<div class="info-group text-right">
								<p class="info-label"></p>
								<div class="info-control">
									{!! Form::submit('Save', ['class' => 'btn btn-md lazy-btn-default']) !!}
								</div>
							</div>
							{!! Form::close() !!}
						</div>
					</div>{{-- /Info group --}}

					<div class="info-group">
						<h3 class="info-label">
							Shop Information Settings
						</h3>
						<div class="info-control">
							{!! Form::open(['method' => 'POST', 'url' => url('/')]) !!}
								<div class="info-group">
									<p class="info-label">
										Shop Information
									</p>
									<div class="info-control">
										<div class="form-group">
											{!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
											{!! Form::text('address', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Shop\'s Address']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
											{!! Form::textarea('description', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Describe your shop', 'rows' => 6]) !!}
										</div>
										<div class="form-group">
											{!! Form::label('category', 'Category', ['class' => 'control-label']) !!}
											{!! Form::select('category', [], [], ['class' => 'form-control lazy-form-control', 'placeholder' => 'Category']) !!}
										</div>
									</div>
								</div>
								<div class="info-group">
									<p class="info-label">
										Contact Information
									</p>
									<div class="info-control">
										<div class="form-group">
											{!! Form::label('contact_num', 'Contact Number', ['class' => 'control-label']) !!}
											{!! Form::text('contact_num', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Shop\'s Contact Number']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
											{!! Form::text('email', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Shop\'s Email Address']) !!}
										</div>
										<div class="form-group">
											{!! Form::label('website_link', 'Website', ['class' => 'control-label']) !!}
											{!! Form::text('website_link', null, ['class' => 'form-control lazy-form-control', 'placeholder' => 'Shop\'s Website (If any)']) !!}
										</div>
									</div>
									<div class="info-group">
										<p class="info-label"></p>
										<div class="info-control text-right">
											{!! Form::submit('Save', ['class' => 'btn btn-md lazy-btn-default']) !!}
										</div>
									</div>
								</div>
							{!! Form::close() !!}
						</div>
						<div class="info-group">
							<div class="info-label"></div>
						</div>
					</div>{{-- /Info group --}}
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