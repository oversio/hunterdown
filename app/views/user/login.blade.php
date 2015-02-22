@extends('layout.master')

@section('imports')
	@parent	
@stop

@section('titulo')HunterDown | Log In @stop

@section('links') 
	@parent
@stop

@section('contenido')
	@parent
	<div class="container" style="margin: 70px auto;">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@if ($regis == 1)
					{{"<div class='alert alert-info' role='alert'>Usuario registrado con exito!</div>"}}
				@endif
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="well well-lg">
					{{ Form::open(array('id' => 'form-login', 'class' => 'form-horizontal', 'method' => 'post', 'url' => 'login')) }}
						<fieldset>
							
							@if(Session::has('error_message'))
								<span class="text-danger">{{ Session::get('error_message') }}</span>								
							@endif

							<legend>Acceso Usuario</legend>

							<div class="form-group required-control">
								{{ Form::label('usermail', 'Usuario', ['class' => 'col-md-3 control-label']) }}
								<div class="col-md-8">
									{{ Form::text('usermail', '', ['id' => 'usermail', 'placeholder' => 'Usuario o E-mail', 
												  'class' => 'form-control input-md', 'required' => 'true'])}}
								</div>
							</div>

							<div class="form-group required-control">
								{{ Form::label('passwd', 'Password', ['class' => 'col-md-3 control-label']) }}
								<div class="col-md-8">
									{{ Form::password('passwd', ['id' => 'passwd', 'placeholder' => 'Contraseña', 
												  	  'class' => 'form-control input-md', 'required' => 'true']) }}
								</div>
							</div>

							<div class="form-group required-control">
								<div class="col-md-offset-3 col-md-3 control-label text-left">
									<label>
										{{ Form::checkbox('remember', true) }} Remember me
									</label>
								</div>
							</div>

							<div class="form-group" style="margin-top: 35px;">
								<div class="col-md-12 text-center">
									<div class="btn-group">
										{{ Form::submit('Aceptar', ['id' => 'btn-ok', 'name' => 'btn-ok', 
														'class' => 'btn btn-default col-md-3', 'style' => 'width: 120px']) }}
										{{Form::button('Cancelar', ['id' => 'btn-cancel', 'name' => 'btn-cancel',
                                                    'class' => 'btn btn-primary col-md-3',
                                                    'style' => 'width: 120px;',
                                                    'onClick' => 'location.href = "javascript:history.go(-1);"'])}}
									</div>
								</div>
							</div>
						</fieldset>
					{{ Form::close() }}
				</div>
			</div>
		</div>	
	</div>
@stop	