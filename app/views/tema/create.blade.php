@extends('layout.master')

@section('titulo')	
	HunterDown | Registro de Temas 
@stop

@section('contenido')
<div class="container" style="margin: 70px auto;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="well well-lg">

				{{ Form::open(['id' => 'form-registro', 'class' => 'form-horizontal', 'method' => 'post', 'action' => 'TemaController@store', 'files' => true]) }}
				
					<fieldset>
						<legend>Registrar Nuevo Tema</legend>

						<div class="form-group">
							{{ Form::label('categoria', 'Categoría', ['class' => 'col-md-3 control-label']) }}
							<div class="col-md-7">
								{{ Form::select('categoria', $combcat, '', ['id' => 'categoria', 
									'name' => 'categoria', 
									'class' => 'form-control']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('genero', 'genero', ['class' => 'col-md-3 control-label']) }}
							<div class="col-md-7">
								@foreach ($generos as $genero)
									<label>
										{{ Form::checkbox('generos[]', $genero->id, '', ['class' => 'checkbox-inline']) }} {{$genero->nombre}}
									</label>
								@endforeach
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('titulo', 'Título', ['class' => 'col-md-3 control-label']) }}							
							<div class="col-md-7">
								{{ Form::input('text', 'titulo', '', ['id' => 'titulo', 
									'name' => 'titulo', 
									'placeholder' => 'Titulo', 
									'class' => 'form-control input-md'])}}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('temporada', 'Temporada', ['class' => 'col-md-3 control-label']) }}
							<div class="col-md-7">
								{{ Form::input('number', 'temporada', '', ['id' => 'temporada', 
									'name' => 'temporada',
									'min' => '1',
									'placeholder' => 'Temporada',
									'class' => 'form-control input-md']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('sinopsis', 'Sinópsis', ['class' => 'col-md-3 control-label']) }}
							<div class="col-md-7">
								{{ Form::textarea('sinopsis', '', ['id' => 'sinopsis', 
									'name' => 'sinopsis',
									'class' => 'form-control',
									'rows' => '10']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('ano', 'Año', ['class' => 'col-md-3 control-label']) }}
							<div class="col-md-7">
								{{Form::selectYear('ano', date('Y'), date('Y')-30, '', array('id' => 'ano',
									'class' => 'form-control',
									'style' => 'width: 90px; float:left; margin-right:10px;')) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('pag', 'Pág. Oficial', ['class' => 'col-md-3 control-label']) }}							
							<div class="col-md-7">
								{{ Form::input('text', 'pag', '', ['id' => 'pag', 
									'name' => 'pag', 
									'placeholder' => 'Pág. Oficial', 
									'class' => 'form-control input-md']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('trailer', 'URL Trailer', ['class' => 'col-md-3 control-label']) }}							
							<div class="col-md-7">
								{{ Form::input('text', 'trailer', '', ['id' => 'trailer', 
									'name' => 'trailer', 
									'placeholder' => 'URL Trailer', 
									'class' => 'form-control input-md']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('formato', 'Formato', ['class' => 'col-md-3 control-label']) }}							
							<div class="col-md-7">
								{{ Form::input('text', 'formato', '', ['id' => 'formato', 
									'name' => 'formato', 
									'placeholder' => 'Tipo de formato', 
									'class' => 'form-control input-md']) }}
							</div>
						</div>

						<div class="form-group">
							{{ Form::label('file', 'Imágen', ['class' => 'col-md-3 control-label']) }}							
							<div class="col-md-7">
								{{ Form::file('file', '', ['id' => 'file'] ) }}
								<span class="help-block">Tamaño recomendado de la imágen: min 270x500px.</span>
							</div>
						</div>
						
						<div class="form-group" style="margin-top: 35px;"> <!-- Botones de Accion -->
							<div class="col-md-12 text-center">
								<div class="btn-group">

									{{Form::submit('Aceptar', ['id' => 'btn-ok', 'name' => 'btn-ok',
										'class' => 'btn btn-default col-md-3',
										'style' => 'width: 120px;'])}}

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
