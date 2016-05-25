@extends('templates.layout', ['title' => 'Login | Lazy Market', 'bodyId' => 'lazy-auth-body'])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	<div class="container lazy-auth-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default lazy-panel">
					{!! Form::open(['method' => 'POST', 'url' => url('/login')]) !!}
						<div class="panel-heading text-center">
							LOGIN
						</div>
						<div class="panel-body">
							<div class="form-group">
								{!! Form::label('username', 'Username or E-mail: ', ['class' => 'control-label']) !!}
								{!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => 'Username or E-mail address']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
								{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
							</div>
							<div class="form-group">
								<label for="remember_me" class="control-label">
									<input type="checkbox" name="remember_me" id="remember_me">
									Remember me?
								</label>
							</div>
						</div>
						<div class="panel-footer">
							<div class="text-right">
								<span class="pull-left">
									<a href="{{ url('/password') }}">Lost Password? </a> | 
									<a href="{{ url('/register') }}">Create an account</a>
								</span>
								{!! Form::submit('LOGIN', ['class' => 'btn btn-sm lazy-btn-default']) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	@include('templates.partials._footer')
@endsection