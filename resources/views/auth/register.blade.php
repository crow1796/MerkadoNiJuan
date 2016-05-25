@extends('templates.layout', ['title' => 'Create an account | Lazy Market', 'bodyId' => 'lazy-auth-body'])

@section('header')
	@include('templates.partials._header')
@endsection

@section('content')
	<div class="container lazy-auth-container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="panel panel-default lazy-panel">
					{!! Form::open(['method' => 'POST', 'url' => url('/register')]) !!}
						<div class="panel-heading text-center">
							REGISTER
						</div>
						<div class="panel-body">
							<div class="form-group">
								{!! Form::label('username', 'Username: ', ['class' => 'control-label']) !!}
								{!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => 'Username*']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('email', 'E-mail address: ', ['class' => 'control-label']) !!}
								{!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'E-mail address*']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
								{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password*']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('password_confirmation', 'Confirm Password: ', ['class' => 'control-label']) !!}
								{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Re-enter Password*']) !!}
							</div>
							<div class="form-group row">
								<div class="col-sm-4">
									{!! Form::label('first_name', 'First Name: ', ['class' => 'control-label']) !!}
									{!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'First name*']) !!}
								</div>
								<div class="col-sm-4">
									{!! Form::label('middle_name', 'Middle Name: ', ['class' => 'control-label']) !!}
									{!! Form::text('middle_name', old('middle_name'), ['class' => 'form-control', 'placeholder' => 'Middle name(optional)']) !!}
								</div>
								<div class="col-sm-4">
									{!! Form::label('last_name', 'First Name: ', ['class' => 'control-label']) !!}
									{!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last name*']) !!}
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-12">
									{!! Form::label('birth_date', 'Birth date', ['class' => 'control-label']) !!}
								</div>
								<div class="col-sm-4">
									{!! Form::label('month', 'Month: ', ['class' => 'control-label']) !!}
									{!! Form::select('month', [], old('month'), ['class' => 'form-control', 'placeholder' => 'Month*']) !!}
								</div>
								<div class="col-sm-4">
									{!! Form::label('day', 'Day: ', ['class' => 'control-label']) !!}
									{!! Form::select('day', [], old('day'), ['class' => 'form-control', 'placeholder' => 'Day*']) !!}
								</div>
								<div class="col-sm-4">
									{!! Form::label('year', 'Year: ', ['class' => 'control-label']) !!}
									{!! Form::select('year', [], old('year'), ['class' => 'form-control', 'placeholder' => 'Year*']) !!}
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Gender*: </label>
								<label value="Male" class="control-label">
									<input type="radio" name="gender" id="gender" value="Male"> Male
								</label>
								<label value="Female" class="control-label">
									<input type="radio" name="gender" id="gender" value="Female"> Female
								</label>
							</div>
							<div class="form-group">
								{!! Form::label('captcha', 'Captcha: ', ['class' => 'control-label']) !!}
							</div>
						</div>
						<div class="panel-footer">
							<div class="text-right">
								<span class="pull-left">
									<a href="{{ url('/login') }}">Already have an account? </a>
								</span>
								{!! Form::submit('REGISTER', ['class' => 'btn btn-sm lazy-btn-default']) !!}
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