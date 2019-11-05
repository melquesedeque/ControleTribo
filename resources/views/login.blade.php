@extends('templateForm')
@section('body')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<span class="login100-form-title" style="margin-top: -10%;">
					Sistema de Controle da Tribo da Nação
				</span>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('assets/Login_v1/images/img-01.png')}}" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" action="{{ route('loginAutenticar') }}" method="post">
					@csrf
					<span class="login100-form-title">
						Faça seu Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					@if ($errors->all())
						@foreach ($errors->all() as $erro)
							<div class="alert alert-danger" role="alert">
								{{ $erro }}
							</div>
						@endforeach
					@endif

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
