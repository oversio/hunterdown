@extends('layout.master')

@section('imports')
	@parent
@stop

@section('titulo')
	HunterDown | Menú Administrador
@stop

@section('links') 
	@parent
@stop

@section('contenido')
	<div class="container container-fluid" style="margin-top: 30px; padding: 0px; ">
		<div class="row">
			<!-- Menu -->
			<div class="col-md-2" style="marging-right: 1px;">
				<span><h1 style="margin-top: 0px;" >Menú</h1></span>								

				<ul id="menulateral" class="nav nav-pills nav-stacked">
					<paper-shadow z='1'></paper-shadow>
					<li>{{HTML::link('/tema', 'Temas', [ 'class' => 'text-info'])}}</li>
					<li>{{HTML::link('/user', 'Usuarios', [ 'class' => 'text-info'])}}</li>
					<li>{{HTML::link('#', 'Servidores', [ 'class' => 'text-info'])}}</li>
					<li>{{HTML::link('#', 'Cetegorías', [ 'class' => 'text-info'])}}</li>
					<li>{{HTML::link('#', 'Generos', [ 'class' => 'text-info'])}}</li>
				</ul>
			</div>
			<!-- Fin Menu -->

			<!-- Listas -->
			<div id="contenido" class="col-md-6" style="padding: 1px; padding-right: 10px;">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							@section('tituloAdm')
								<div class="col-md-10">
									@section('nombre')<h2 style="margin-top: 0px;">Seleccione una Lista del Menú</h2> @show
								</div>
							@show

							@section('boton')								
							@show							

						</div>

						@section('aviso')							
						@show
					</div>
				</div>

				@section('info')
				@show

			</div>
			<!-- Fin Listas -->

			<!-- Detalles de Listas -->
			<div id="detalle" class="col-md-4"  style="padding-left: 23px;">

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							@section('tituloDet')
								<div class="col-md-10">
									@yield('nombreDet')
								</div>
							@show

							@section('botonDet')								
							@show							

						</div>

						@section('avisoDet')							
						@show
					</div>
				</div>

				@section('infoDet')
					
				@show

			</div>
			<!-- Fin Detalle de Listas -->

		</div>
	</div>
@stop
