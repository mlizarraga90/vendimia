@section('header')
	<!DOCTYPE html>
		<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>@yield('title')</title>
				<link rel="stylesheet" type="text/css" href="assets/css/vendimia.css">
			</head>
@show
@section('menu')
			<body>
				<div class="fullcontainer">
					<div class="nav-bar">
						<ul>
							<li>
								<a>Inicio</a>
								<ul>
									<li class="separator"><a href="/ventas">Ventas</a></li>
									<li><a>Clientes</a></li>
									<li><a>Articulos</a></li>
									<li><a>Configuración</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
@show
@section('footer')
				<script src="assets/js/helpform.js" type="text/javascript"></script>
			</body>
		</html>
@show