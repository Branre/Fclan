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
		<header class="space-inter">
			<div class=" container-flex  space-between " >
				<figure class="logo"><img src="img/logo.png" alt=""></figure>
				<nav class="custom-wrapper" id="menu">
					<div class="pure-menu"></div>
					<ul class="container-flex list-unstyled container-fluid">
						<li><a href="index.html" class="text-uppercase">Inicio</a></li>
						<li><a href="about.html" class="text-uppercase">Mi usuario</a></li>
						<li><a href="archive.html" class="text-uppercase">Nosotros</a></li>
						<li><a href="archive.html" class="text-uppercase">Contacto</a></li>
					</ul>
				</nav>
			</div>
		</header>


@yield('content')

		<section class="footer">
			<footer>

			</footer>
		</section>
	</div>

<script src="{{ mix('js/app.js') }}"> </script>

@stack('scripts')
	
</body>
</html>