@extends('Templates.content')
@section('content')
	<div class="grow">
		<div class="container">
			<h2>Iniciar Sesión</h2>
		</div>
	</div>
<div class="container">
		<div class="account">
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form method="POST" action="{{ route('login') }}">
                @csrf
			<div>
				<span>Correo Electrónico</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>
			<div> 
				<span >Password</span>
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
			</div>				
            <div class="row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">Recordar contraseña</label>
                    </div>
                </div>
            </div>
				<input type="submit" value="Entrar"> 
				@if (Route::has('password.request'))
						<a class="btn btn-link" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
				@endif
			</form>
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
			<div class="five">
			<h2>25% </h2><span>discount</span>
			</div>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>
</div>
@endsection