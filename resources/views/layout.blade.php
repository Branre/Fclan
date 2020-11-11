<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Fclan</title>
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/framework.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
	<div id="app">
		<section class="header">
			<header>
				<a href="">Inicio</a> 
				<a href="">Acerca de</a> 
				<a href="">Mi usuario</a> 
			</header>
		</section>


@yield('content')

		<section class="footer">
			<footer>}

			</footer>
		</section>
	</div>

<script src="{{ mix('js/app.js') }}"> </script>

@stack('scripts')
	
</body>
</html>