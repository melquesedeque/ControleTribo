<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Tribos Financeiro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
	<link rel="icon" type="image/png" href="{{asset('assets/Login_v1/images/icons/favicon.ico')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/animate/animate.css')}}">	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/css/util.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/Login_v1/css/main.css')}}"/>

	@stack('css')

</head>
<body>

    @yield('body')
	
	<script src="{{asset('assets/Login_v1/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/Login_v1/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/Login_v1/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/Login_v1/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('assets/Login_v1/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{asset('assets/Login_v1/js/main.js')}}"></script>

</body>
</html>