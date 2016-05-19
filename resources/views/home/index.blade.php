@extends('templates.layout', ['title' => $title, 'bodyId' => 'home-landing'])

@section('header')
	<nav class="navbar navbar-static-top navbar-default" id="home-landing-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a href="{{ url('/') }}" class="navbar-brand">
					BRAND
				</a>
			</div>
		</div>
	</nav>
@endsection

@section('content')
	{{-- Container --}}
	<div class="container">
		<h1 class="text-center lazy-header lazy-header-1" id="home-landing-header">
			Lorem ipsum dolor si ELIT!
		</h1>
		<h2 class="text-center lazy-header">
			Lorem ipsum dolor
		</h2>
		<h2 class="text-center lazy-header">
			Lorem dolor sit!
		</h2>
		<div id="home-landing-btn-container" class="text-center">
			<a href="#home-landing-login" data-toggle="modal" class="lazy-button lazy-button-primary lazy-button-skew">
				LOGIN
			</a>
			<a href="#home-landing-register" data-toggle="modal" class="lazy-button lazy-button-primary lazy-button-skew">
				REGISTER
			</a><a href="{{ url('/') }}" class="lazy-button lazy-button-primary lazy-button-round lazy-button-calm">
				Continue as Guest &raquo;
			</a>
		</div>
		{{-- Login Modal --}}
		<div class="modal fade lazy-modal" id="home-landing-login">
			<div class="modal-dialog">
				{!! Form::open(['method' => 'POST', 'class' => 'lazy-form lazy-form-primary']) !!}
					<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title">LOGIN</h2>
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								{!! Form::text('email', null, ['class' => 'form-control lazy-input', 'tabindex' => 1, 'placeholder' => 'Username or Email']) !!}
							</div>
							<div class="form-group">
								{!! Form::password('password', ['class' => 'form-control lazy-input', 'tabindex' => 2, 'placeholder' => 'Password']) !!}
							</div>
						</div>
						<div class="modal-footer">
							<a href="{{ url('/') }}" tabindex="4">Lost Password?</a>
							{!! Form::submit('LOGIN', ['class' => 'lazy-button lazy-button-primary lazy-button-round', 'tabindex' => 3]) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>{{-- /Login Modal --}}

		{{-- Register Modal --}}
		<div class="modal fade lazy-modal" id="home-landing-register">
			<div class="modal-dialog">
				{!! Form::open(['method' => 'POST', 'class' => 'lazy-form lazy-form-primary']) !!}
					<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title">REGISTER</h2>
							<button type="button" class="close" data-dismiss="modal">
								&times;
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								{!! Form::text('email', null, ['class' => 'form-control lazy-input', 'placeholder' => 'Email *']) !!}
							</div>
							<div class="form-group">
								{!! Form::password('password', ['class' => 'form-control lazy-input', 'placeholder' => 'Password *']) !!}
							</div>
							<div class="form-group">
								{!! Form::password('password_confirmation', ['class' => 'form-control lazy-input', 'placeholder' => 'Confirm Password *']) !!}
							</div>
							<div class="form-group row">
								<div class="col-md-4">
									{!! Form::text('first_name', null, ['class' => 'form-control lazy-input', 'placeholder' => 'First Name *']) !!}
								</div>
								<div class="col-md-4">
									{!! Form::text('middle_name', null, ['class' => 'form-control lazy-input', 'placeholder' => 'Middle Name']) !!}
								</div>
								<div class="col-md-4">
									{!! Form::text('last_name', null, ['class' => 'form-control lazy-input', 'placeholder' => 'Last Name *']) !!}
								</div>
							</div>
							<div class="form-group">
								{!! Form::input('text', 'birth_date', null, ['class' => 'form-control lazy-input lazy-input-date', 'placeholder' => 'Birth Date']) !!}
							</div>
						</div>
						<div class="modal-footer">
							{!! Form::submit('REGISTER', ['class' => 'lazy-button lazy-button-primary lazy-button-round']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>{{-- /Register Modal --}}
	</div>{{-- /Container --}}
<script type="text/javascript">
	particlesJS('home-landing', {
	"particles": {
	  "number": {
	    "value": 120,
	    "density": {
	      "enable": true,
	      "value_area": 800
	    }
	  },
	  "color": {
	    "value": "#ffffff"
	  },
	  "shape": {
	    "type": "circle",
	    "stroke": {
	      "width": 0,
	      "color": "#000000"
	    },
	    "polygon": {
	      "nb_sides": 6
	    }
	  },
	  "opacity": {
	    "value": 0.8,
	    "random": false,
	    "anim": {
	      "enable": false,
	      "speed": 1,
	      "opacity_min": 0.1,
	      "sync": false
	    }
	  },
	  "size": {
	    "value": 3,
	    "random": true,
	    "anim": {
	      "enable": false,
	      "speed": 40,
	      "size_min": 0.1,
	      "sync": false
	    }
	  },
	  "line_linked": {
	    "enable": true,
	    "distance": 150,
	    "color": "#ffffff",
	    "opacity": 0.4,
	    "width": 1
	  },
	  "move": {
	    "enable": true,
	    "speed": 6,
	    "direction": "none",
	    "random": false,
	    "straight": false,
	    "out_mode": "out",
	    "bounce": false,
	    "attract": {
	      "enable": false,
	      "rotateX": 600,
	      "rotateY": 1200
	    }
	  }
	},
	"modes": {
	  "grab": {
	    "distance": 400,
	    "line_linked": {
	      "opacity": 1
	    }
	  }
	},
		"retina_detect": true
});
</script>
@endsection