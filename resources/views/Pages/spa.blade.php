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

	<style>
		.router-link-exact-active{
			color: #78A2D2 ;
		}
	</style>
</head>
<body>
	<div id="app">
		<header class="space-inter">
			<div class=" container-flex  space-between " >
				<figure class="logo"><img src="img/logo.png" alt=""></figure>
				<nav class="custom-wrapper" id="menu">
					<div class="pure-menu"></div>
					<ul class="container-flex list-unstyled container-fluid">
						<li><router-link to="/" class="text-uppercase">Inicio</router-link></li>						
						<li><router-link to="/nosotros" class="text-uppercase">Nosotros</router-link></li>
						<li><router-link to="/contacto" class="text-uppercase">Contacto</router-link></li>
						<li><a to="/" class="text-uppercase">Mi usuario</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<router-view></router-view>


<section class="footer">
	<footer>

	</footer>
</section>


</div>
<script src="{{mix('js/app.js') }}"> </script>

</body>
</html>