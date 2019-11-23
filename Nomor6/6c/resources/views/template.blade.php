<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Arkademy CoffeShop</title>
	{{--Memanggil bootsrtap.
	Komentar ini tidakk akan tampil di browser.--}}
	<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


</head>
<body>
	<div class="container">
		@yield('main')
	</div>

	@yield('footer')

	<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
	<script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/slideUp.js') }}"></script>
</body>
</html>