@extends('admin.templates.layout', ['title' => $title])

@section('content')
	<div id="admin-page-content" class="toggled">
		<div class="lazy-sidebar-admin-container">
			<div class="lazy-sidebar-user-container">
				<div class="lazy-sidebar-user-thumbnail-container">
					<img src="{{ url('/images/bg-02.jpg') }}" class="lazy-sidebar-user-thumbnail">
				</div>
				<div class="lazy-sidebar-user-info-container">
					<span class="user-name">Joshua Tundag</span>
					<span class="user-role">Admin</span>
				</div>
			</div>
			<div class="lazy-sidebar-menu-container">
				<ul class="lazy-sidebar-menu">
					<li class="active">
						<a href="{{ url('/') }}">
							<span class="fa fa-dashboard"></span>
							Dashboard
						</a>
					</li>
					<li>
						<a href="{{ url('/') }}">
							<span class="fa fa-users"></span>
							Manage Users
						</a>
					</li>
					<li>
						<a href="{{ url('/') }}">
							<span class="fa fa-building"></span>
							Manage Shops
						</a>
					</li>
					<li>
						<a href="{{ url('/') }}">
							<span class="fa fa-book"></span>
							Page Contents
						</a>
					</li>
					<li class="lazy-sidebar-dropdown">
						<a href="#" data-toggle="lazy-sidebar-menu">
							<span class="fa fa-bell"></span>
							Requests
							<span class="fa fa-caret-down pull-right lazy-dropdown-caret"></span>
						</a>
						<ul class="lazy-sidebar-dropdown-menu">
							<li>
								<a href="{{ url('/') }}">
									<span class="fa fa-home"></span>
									Lorem
								</a>
							</li>
							<li>
								<a href="{{ url('/') }}">
									<span class="fa fa-home"></span>
									Ipsum
								</a>
							</li>
							<li>
								<a href="{{ url('/') }}">
									<span class="fa fa-home"></span>
									Dolor
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{ url('/') }}">
							<span class="fa fa-cog"></span>
							Settings
						</a>
					</li>
				</ul>
			</div>
		</div>
		{{-- Sidebar menu --}}
		<div class="container-fluid">
			<h1 class="page-header text-center">Hello World!</h1>
		</div>
	</div>
@endsection
