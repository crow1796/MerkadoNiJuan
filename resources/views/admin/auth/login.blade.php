<!DOCTYPE html>
<html lang="en">
<head>
	@include('templates.partials._assets', ['title' => 'Login | Lazy Market'])
</head>
<body id="login-page-wrapper">
	<div class="container lazy-auth-container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default lazy-panel">
					{!! Form::open(['method' => 'POST', 'url' => url('/admin')]) !!}
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
								{!! Form::submit('LOGIN', ['class' => 'btn btn-sm lazy-btn-default']) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</body>
</html>