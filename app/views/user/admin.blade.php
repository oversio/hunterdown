@extends('layout.admin')

	@section('tituloAdm')
		@parent
		@section('nombre')<h1 style="margin-top: 0px;">Lista de Usuarios</h1> @stop
	@stop

	@section('aviso')		
	@show

	@section('boton')
		<div class="col-md-2 text-right" style="padding-left: 0px;">
			<a href="/user/create" alt="nuevo" id="nuevo" class="btn btn-info">Nuevo</a>
		</div>
	@stop

	@section('info')	
		<div class="row">
			<div class="col-md-12">
				@if ($regis == 1)
					{{"<div class='alert alert-info' role='alert'>Usuario registrado con exito!</div>"}}
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel-body" style="font-size: 12px; padding: 0px;">
					<table id="listUser" class="table table-striped table-hover table-responsive  paper-shadow-top-z-2" style="border-radius: 7px;" >
						<thead>
							<tr class="text-info" style="font-size: 14px">
								<th class="hidden-sm hidden-xs">#</th>
								<th>Nombre</th>
								<th>Usuario</th>
								<th>Correo</th>
								<th>Acciones</th>
							</tr>										
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach ($users as $user) <!-- Muestra la lista de usuarios -->
								<tr id="{{$user->id}}" style="cursor: pointer;" {{($user->status) == 0 ? "class='danger'":"";}} >
									<td class="hidden-sm hidden-xs"><div>{{$i++}}</div></td>
									<td><div>{{$user->nombre}}</div></td>
									<td><div>{{$user->usuario}}</td></div>
									<td><div>{{$user->email}}</div></td>
									<td>
										<div class='text-center'>
											<span class="glyphicon glyphicon-pencil text-success toolti" alt="editar" data-toggle="tooltip" data-placement="left" title="Editar a {{$user->usuario}}"></span>
											&nbsp;&nbsp;&nbsp;
											<span class="glyphicon glyphicon-remove text-danger toolti" alt="eliminar" data-toggle="tooltip" data-placement="right" title="Eliminar a {{$user->usuario}}"></span>
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
				{{$users->links()}}				
			</div>
		</div>
	@stop

	@section('tituloDet')
		@parent
		@section('nombreDet')<h1 style="margin-top: 0px;">Info de Usuario</h1> @stop
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
