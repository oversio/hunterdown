@extends('layout.admin')

	@section('tituloAdm')
		@parent
		@section('nombre')<h1 style="margin-top: 0px;">Lista de Temas</h1> @stop
	@stop

	@section('aviso')		
	@show

	@section('boton')
		<div class="col-md-2 text-right" style="padding-left: 0px;">
			<a href="/tema/create" alt="nuevo" id="nuevo" class="btn btn-info">Nuevo</a>
		</div>
	@stop

	@section('info')	
		@if($mens != '')
			<div class="row">			
				<div class="col-md-12">
					{{"<div class='alert ".$clase."' role='alert'>".$mens."</div>"}}
				</div>
			</div>
		@endif
		<div class="row">
			<div class="col-md-12">
				<div class="panel-body" style="font-size: 12px; padding: 0px;">
					<table id="listTema" class="table table-striped table-hover table-responsive  paper-shadow-top-z-2" style="border-radius: 7px;" >
						<paper-shadow z='3'></paper-shadow>
						<thead>
							<tr class="text-info" style="font-size: 14px">
								<th class="hidden-sm hidden-xs">#</th>
								<th>Categoria</th>
								<th>Título</th>
								<th>Temp</th>
								<th>Subida</th>
								<th>Acciones</th>
							</tr>										
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach ($temas as $tema) <!-- Muestra la lista de usuarios -->
								<tr id="{{$tema->id}}" style="cursor: pointer;">
									<td class="hidden-sm hidden-xs"><div>{{$i++}}</div></td>
									<td><div>{{$tema->catigoria_id}}</div></td>
									<td><div>{{$tema->titulo}}</td></div>
									<td><div>{{$tema->temporada}}</div></td>
									<td><div>{{$tema->fechahora}}</div></td>
									<td>
										<div class='text-center'>
											<span class="glyphicon glyphicon-pencil text-success toolti" alt="editar" data-toggle="tooltip" data-placement="left" title="Editar a {{$tema->titulo}}"></span>
											&nbsp;&nbsp;&nbsp;
											<span class="glyphicon glyphicon-remove text-danger toolti" alt="eliminar" data-toggle="tooltip" data-placement="right" title="Eliminar a {{$tema->titulo}}"></span>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<div class="row text-center info">
			<div class="col-md-12">
				{{$temas->links()}}				
			</div>
		</div>
	@stop

	@section('tituloDet')
		@parent
		@section('nombreDet')<h1 style="margin-top: 0px;">Info del Tema</h1> @stop
	@stop

	@section('avisoDet')
	@show

	@section('infoDet')
		<div class="row">
			<div class="col-md-12">
				<div id="detalles" class="panel-body" style="font-size: 16px; padding: 0px;">
					
				</div>				
			</div>
		</div>		
	@stop
