<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<link rel="shortcut icon" href="img/favicon.ico" alt="ico" />

	@section('imports')
		<link rel="import" href="components/bower_components/paper-toggle-button/paper-toggle-button.html">
		<link rel="import" href="components/font-roboto/roboto.html">
		<link rel="import" href="components/polymer/polymer.html">
		<link rel="import" href="components/paper-shadow/paper-shadow.html">
	@show

	<title> 
		@yield('titulo')			
	</title>
	@section('estilos')
		{{ HTML::style('css/bootstrap.min.css') }} 			
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/banners.css') }}
		{{ HTML::style('components/paper-shadow/paper-shadow.css') }}
	@show
	@section('scripts')		
		{{ HTML::script('components/platform/platform.js') }}
		{{ HTML::script('js/jquery-1.11.1.min.js') }}
		{{ HTML::script('js/validation/jquery.validate.min.js') }}
		{{ HTML::script('js/validaciones.js') }}
		{{ HTML::script('js/scripts.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js') }}
		{{ HTML::script('js/jquery.scrollTo.js') }}
		{{ HTML::script('js/barra.js') }}
	@show
</head>

<body class="grand" style="padding-top: 50px;">

	<div class="navbar-wrapper">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					{{ HTML::link('/', 'HunterDown', array('class' => "navbar-brand")) }}
					{{ Form::button('<span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>',
									array('class' => 'navbar-toggle', 
										  'type' => 'button',
										  'data-toggle' => 'collapse', 
										  'data-target' => '#navbar-main')
					)}}					
				</div>

				<div class="collapse navbar-collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						@section('links')
							<!--li>{{ HTML::link('/', 'Inicio') }}</li-->
							<li>{{ HTML::link('#', 'Películas') }}</li>
							<li>{{ HTML::link('#', 'Series') }}</li>
							@if (Auth::check() && Auth::user()->tipouser_id == 1)
								<li>{{ HTML::link('/admin', 'Administrar') }}</li>
							@endif
						@show
					</ul>


					<ul class="nav navbar-nav navbar-right">
						@if(Auth::check())							
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="glyphicon glyphicon-user"> </i> 
									{{ Auth::user()->usuario }} <b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li><a id="userinfo" href="#">Mi Perfil</a></li>
									@if(Auth::user()->tipouser_id == 2)
										<li><a id="usermovies" href="#">Películas</a></li>
										<li><a id="userseries" href="#">Series</a></li>
									@endif
									@if(Auth::user()->tipouser_id == 1)
										<li><a id="temaadmin" href="/tema">Temas</a></li>
										<li><a id="useradmin" href="/user">Usuarios</a></li>
									@endif
									<li><a id="logout" href="logout">Cerrar Sesión</a></li>
								</ul>
							</li>
						@else
							<li>{{ HTML::link('/login', 'Login') }}</li>
							<li>{{ HTML::link('/user/create', 'Registrarse') }}</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</div>
		
		@section('contenido')
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<paper-shadow z='4'></paper-shadow>		
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<div class="banners">
							<img src="/img/banners/thewalkingdead.jpg" alt="The Walking Dead" class="img-responsive">
						</div>
						<div class="container">
							<div class="carousel-caption">
								<h1>The Walking Dead Temporada 4</h1>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="banners">
							<img src="/img/banners/arrow.jpg" alt="Arrow" class="img-responsive">
						</div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Arrow Temporada 2</h1>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="banners">
							<img src="/img/banners/gameofthrones.jpg" alt="Game Of Thrones" class="img-responsive">
						</div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Game Of Thrones Temporada 4</h1>
								<p>Estreno el proximo 6 de Abril.</p>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="banners">
							<img src="/img/banners/thefollowing.jpg" alt="The Following" class="img-responsive">
						</div>
						<div class="container">
							<div class="carousel-caption">
								<h1>The Following Temporada 2</h1>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="banners">
							<img src="/img/banners/agentsofshield.jpg" alt="Agenst Of S.H.I.E.L.D." class="img-responsive">
						</div>
						<div class="container">
							<div class="carousel-caption">
								<h1>Agenst Of S.H.I.E.L.D. Temporada 1</h1>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			<!-- carousel -->
		@show

	<footer>		
		@section('footer')
			{{HTML::link('#myCarousel', 'top', array('id' => 'top-link'))}}
		@show
	</footer>

</body>
</html>