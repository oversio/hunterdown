<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>..::Peliculas y Series::..</title> -->
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/validation/jquery.validate.min.js"></script>
	<script src="js/validaciones.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<!-- 
	{{ HTML::style('css.bootstrap.min.css') }}
	{{ HTML::style('css.style.css') }}
	{{ HTML::script('js.jquery-1.11.1.min.js') }}
	{{ HTML::script('js.validation.jquery.validate.min.js') }}
	{{ HTML::script('js.validaciones.js') }}
	{{ HTML::script('js.bootstrap.min.js') }}
	{{ HTML::script('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js') }} -->
	
	<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
	<script type="text/javascript">
	jQuery(function($){
		$('#top-link').click(function(){
			$.scrollTo( 0, 400);
			return false;
		});
	});
	</script>

	<script type="text/javascript">
	jQuery.fn.topLink = function(settings) {
		settings = jQuery.extend({
			min: 1,
			fadeSpeed: 200,
			ieOffset: 50
		}, settings);
		return this.each(function() {
			var el = $(this);
			el.css('display','none');
			$(window).scroll(function() {
				if(!jQuery.support.hrefNormalized) {
					el.css({
						'position': 'absolute',
						'top': $(window).scrollTop() + $(window).height() - settings.ieOffset
					});
				}
				if($(window).scrollTop() >= settings.min)
				{
					el.fadeIn(settings.fadeSpeed);
				}
				else
				{
					el.fadeOut(settings.fadeSpeed);
				}
			});
		});
	};
	
	$(document).ready(function() {
		$('#top-link').topLink({
			min: 600,
			fadeSpeed: 500
		});
	});
	</script>

	<style type="text/css">	
	.banners{width: auto;max-height: 500px;overflow: hidden;}
	.navbar-wrapper {position: absolute;top: 20px;right: 0;left: 0;z-index: 20;}
	.navbar-wrapper .container {padding-right: 0;padding-left: 0;}
	.navbar-wrapper .navbar {padding-right: 15px;padding-left: 15px;}

	.bs-callout{margin:20px 0;padding:20px;border-left:3px solid #eee; height: auto;}
	.bs-callout h4{margin-top:0;margin-bottom:5px}
	.bs-callout p:last-child{margin-bottom:0}
	.bs-callout code{background-color:#fff;border-radius:3px}
	.bs-callout-danger{background-color:#fdf7f7;border-color:#d9534f}
	.bs-callout-danger h4{color:#d9534f}
	.bs-callout-warning{background-color:#fcf8f2;border-color:#f0ad4e}
	.bs-callout-warning h4{color:#f0ad4e}
	.bs-callout-info{background-color:#f4f8fa;border-color:#5bc0de}
	.bs-callout-info h4{color:#5bc0de}

	#top-link {
		display: inline;
		text-decoration: none;
		position: fixed;
		bottom: 50px;
		right: 20px;
		overflow: hidden;
		width: 51px;
		height: 51px;
		border: medium none;
		text-indent: 100%;
		background: url('img/top.png') no-repeat scroll left top transparent;
	}
	.well{color: #3a3e3d;}
	label[class~="checkbox-inline"]{margin-left: 10px;}
	</style>
</head>
<body class="grand" style="padding-top: 50px;">

	<?php
	$home="";
	$peli="";
	$series="";
	$login="";
	$reg="";
	$admu="";

		// echo convertBase64('img/banners/thewalkingdead.jpg','100%','70%');

	if(strpos($_SERVER['REQUEST_URI'], "login"))
		$login = " class='active' ";
	elseif(strpos($_SERVER['REQUEST_URI'], "registra"))
		$reg=  " class='active' ";
	elseif(strpos($_SERVER['REQUEST_URI'], "admin"))
		$admu = " class='active' ";
	else
		$home = " class='active' ";
	?>
	<div class="navbar-wrapper">

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">HunterDown</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li <?php print($home); ?>><a href="index.php">Inicio</a></li>
						<li <?php print($peli); ?>><a href="#">Peliculas</a></li>
						<li <?php print($series); ?>><a href="#">Series</a></li>
						<?php 
						if(isset($_SESSION['user'])) {
							if ($_SESSION['tipo_usu'] == 1) {
								?>
								<li <?php print($admu); ?>><a href="admin.php">Administrar</a></li>
						<?php }} ?>
					</ul>


					<ul class="nav navbar-nav navbar-right">
						<?php if (!isset($_SESSION['user'])) {?>
						<li <?php print($login); ?>><a href="login.php">Login</a></li>
						<li <?php print($reg); ?>><a href="registrar.php#form-registro">Registrarse</a></li>
						<?php }else{ ?>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"> </i> <?php print($_SESSION['nombre']); ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a id="cerrarSesion" href="index.php?cerrarSesion=true">Cerrar</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</div>


<!-- Carousel
	================================================== -->
	<?php if ($caru) { ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
					<img src="img/banners/thewalkingdead.jpg" alt="The Walking Dead" class="img-responsive">
				</div>
				<div class="container">
					<div class="carousel-caption">
						<h1>The Walking Dead Temporada 4</h1>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="banners">
					<img src="img/banners/arrow.jpg" alt="Arrow" class="img-responsive">
				</div>
				<div class="container">
					<div class="carousel-caption">
						<h1>Arrow Temporada 2</h1>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="banners">
					<img src="img/banners/gameofthrones.jpg" alt="Game Of Thrones" class="img-responsive">
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
					<img src="img/banners/thefollowing.jpg" alt="The Following" class="img-responsive">
				</div>
				<div class="container">
					<div class="carousel-caption">
						<h1>The Following Temporada 2</h1>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="banners">
					<img src="img/banners/agentsofshield.jpg" alt="Agenst Of S.H.I.E.L.D." class="img-responsive">
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
	<?php } ?>
<!-- carousel -->