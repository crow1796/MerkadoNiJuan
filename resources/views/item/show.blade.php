@extends('templates.layout', ['title' => $title])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	{{-- @include('shop.partials._shop-banner', ['shop' => 'shop', 'active' => 0]) --}}
	<div class="container">
		<h1 class="page-header lazy-header-1 lazy-single-shop-header">Shop 1 <small>Item Name</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="{{ url('/shops') }}">Shops</a>
			</li>
			<li>
				<a href="{{ url('/shops', 'shop-1') }}">Shop 1</a>
			</li>
			<li class="active">Item 1</li>
		</ol>
		<div class="row">
			<div class="col-sm-4">
				@include('templates.partials._sub-sidebar')
			</div>{{-- /Sidebar --}}

			<div class="col-sm-8">
				<div class="lazy-single-item-content-container" ng-controller="singleItemController as singleItemVm">
					<div class="lazy-single-item-content">
						@include('templates.partials._spinner', ['id' => 'item-content-spinner'])
						<div>
							<div class="lazy-item-image-viewer-container text-center">
								<a href="#" ng-click="singleItemVm.prevImageIndex($event)" class="lazy-item-image-control lazy-item-image-control-prev"><span class="fa fa-caret-left"></span></a>
								<a href="#" ng-click="singleItemVm.nextImageIndex($event)" class="lazy-item-image-control lazy-item-image-control-next"><span class="fa fa-caret-right"></span></a>

								<div class="lazy-item-image-viewer">
									<img ng-src="{{ url('/') }}/@{{ singleItemVm.currentImage }}" class="lazy-item-image center-block">
								</div>
							</div>
							<div class="lazy-item-images-container">
								<div class="lazy-item-images-thumbnail" ng-repeat="image in singleItemVm.item.images track by $index" ng-click="singleItemVm.setCurrentImageIndex($index)">
									<img ng-src="{{ url('/') }}/@{{ image }}" class="center-block">
								</div>
							</div>
						</div>
						<div class="lazy-item-details-container">
							<h3 class="lazy-header-3 item-name">
								@{{ singleItemVm.item.name }} <span class="badge badge-alert">@{{ singleItemVm.item.discount * 100 }}% OFF</span>
								<button ng-click="singleItemVm.bookmarkItem" type="button" class="btn btn-xs lazy-single-item-bookmark-btn">
									<span class="fa fa-bookmark"></span>
									Bookmark
								</button>
								<button type="button" class="btn btn-xs lazy-single-item-bookmark-btn">
									<span class="fa fa-share"></span>
									Share
								</button>
								<small>
									<span class="item-views">@{{ singleItemVm.item.views | number }}</span>
									views
								</small>
							</h3>
							<div class="item-price">
								<strong>
									<span class="original">@{{ singleItemVm.item.price  | currency:'&#8369; '}}</span> - 
									<span ng-show="singleItemVm.item.discount" class="discounted">@{{ singleItemVm.item.price - (singleItemVm.item.price * singleItemVm.item.discount) | currency:'&#8369; '}}</span>
								</strong>
							</div>
							<div class="item-description">
								<p>
									@{{ singleItemVm.item.description }}
								</p>
							</div>
							<ul class="item-sub-details">
								<li>
									<small>
										<span class="fa fa-cubes"></span>
										@{{ singleItemVm.item.stocks }} stock(s) left
									</small>
								</li>
								<li>
									<small>
										<span class="fa fa-clock-o"></span>
										@{{ singleItemVm.item.posted_at }}
									</small>
								</li>
								<li>
									<small>
										<span class="fa fa-map-marker"></span>
										<a href="#">
											@{{ singleItemVm.item.location }}
										</a>
									</small>
								</li>
								<li>
									<small>
										<span class="fa fa-tag"></span> Category: <a href="#">@{{ singleItemVm.item.category }}</a>
									</small>
								</li>
							</ul>
						</div>{{-- /Details Container --}}
					</div>
					<h3>Comments (@{{ singleItemVm.commentCount }})</h3>
					<div class="lazy-item-comments-container">
						<div class="item-comments">
							@include('templates.partials._spinner', ['id' => 'item-comments-spinner'])
							<div class="item-comment-and-reply" ng-repeat="comment in singleItemVm.item.comments">
								<div class="item-comment item-comment-1">
									<div class="user-thumbnail-container">
										<img src="{{ url('/images/bg-01.jpg') }}" alt="" class="user-thumbnail">
									</div>
									<div class="user-comment-details">
										<div class="user-name">
											<strong>@{{ comment.name }}</strong> - 
											<small>@{{ comment.commented_at }}</small>
											<small>
												<a href="#" class="btn btn-xs">Edit</a>
												<a href="#" class="btn btn-xs">Delete</a>
											</small>
										</div>
										<div class="comment-content">
											@{{ comment.content }}
										</div>
										<div class="comment-control-container">
											<a href="#" class="comment-control comment-control-up"><span class="fa fa-chevron-up"></span></a>
											<a href="#" class="comment-control comment-control-down"><span class="fa fa-chevron-down"></span></a>
											<a href="#" class="comment-control comment-control-reply">
												<span class="fa fa-comment"></span>
												Reply
											</a>
										</div>
									</div>
								</div>{{-- /Item comment --}}
								<div class="item-comment item-comment-2" ng-repeat="reply in comment.replies">
									<div class="user-thumbnail-container">
										<img src="{{ url('/images/bg-01.jpg') }}" alt="" class="user-thumbnail">
									</div>
									<div class="user-comment-details">
										<div class="user-name">
											<strong>@{{ reply.name }}</strong> - 
											<small>@{{ reply.commented_at }}</small>
										</div>
										<div class="comment-content">
											@{{ reply.content }}
										</div>
										<div class="comment-control-container">
											<a href="#" class="comment-control comment-control-up"><span class="fa fa-chevron-up"></span></a>
											<a href="#" class="comment-control comment-control-down"><span class="fa fa-chevron-down"></span></a>
										</div>
									</div>
								</div>{{-- /Item comment --}}
							</div>{{-- /Item comment and reply --}}
						</div>{{-- /Item comments --}}
						<div class="lazy-comment-box-container">
							{!! Form::open(['method' => 'POST']) !!}
								{!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Enter your comment here...', 'rows' => 3, 'ng-model' => 'singleItemVm.commentContent', 'ng-keypress' => 'singleItemVm.sendComment($event)']) !!}
							{!! Form::close() !!}
						</div>
					</div>{{-- /Comments Container --}}
				</div>{{-- /Single Item Content --}}
			</div>{{-- /Col 8 --}}
		</div>{{-- /Row --}}
	</div>{{-- /Container --}}
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection