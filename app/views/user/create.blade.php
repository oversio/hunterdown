@extends('layout.master')

@section('titulo')	
	HunterDown | Registro de Usuarios 
@stop

@section('contenido')
  <div class="container" style="margin: 70px auto;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="well well-lg">

            {{ Form::model($user,array('id' => 'form-registro', 'class' => 'form-horizontal', 'method' => 'post', 'action' => 'UserController@store', 'role' => 'form')) }}

                <fieldset>
                  @if($errors->any())
                    <div class="alert alert-danger">
                      <strong>Se encontraron los siguientes errores</strong>
                      @foreach($errors->all() as $error)
                        <ul>
                          <li>{{$error}}</li>
                        </ul>
                      @endforeach
                    </div>
                  @endif
                  <legend>Regístro de Usuarios</legend>

                  <div class="form-group"> <!-- Input de Nombre -->
                     {{Form::label('nombre', 'Nombre', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">                          
                          {{Form::text('nombre', null, array('id' => 'nombre', 
                                        'placeholder' => 'Nombre para mostrar', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true'))}}
                         <span class="help-block">El nombre que se mostrara para identificarte.</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Input de Usuario -->
                     {{Form::label('usuario', 'Usuario', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::text('usuario', null, array('id' => 'usuario', 
                                        'placeholder' => 'Nombre de Usuario', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true'))}}
                         <span class="help-block">El nombre con el que te conectarás, entre 3 y 30 caracteres.</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Input de E-Mail -->
                     {{Form::label('email', 'E-Mail', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::text('email', null, array('id' => 'email', 
                                        'placeholder' => 'Correo Electrónico', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true'))}}
                         <span class="help-block">Para que podamos verificar tu identidad, y te podamos mantener al día.</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Input de Re-Email -->
                     {{Form::label('email_confirmation', 'Re-ingresa E-Mail', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::text('email_confirmation', null, array('id' => 'email_confirmation', 
                                        'placeholder' => 'Re-ingresa Correo Electrónico', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true'))}}
                         <span class="help-block">Para que podamos verificar tu identidad, y te podamos mantener al día.</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Input de Password -->
                     {{Form::label('password', 'Contraseña', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::password('password', ['id' => 'password', 
                                        'placeholder' => 'Ingrese la Contraseña', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true',
                                        'autocomplete' => 'off'])}}
                         <span class="help-block">Ingrese una contraseña, entre 3 y 20 caracteres</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Input de Re-Password -->
                     {{Form::label('password_confirmation', 'Re-ingrese la Contraseña', 
                                    array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::password('password_confirmation', ['id' => 'password_confirmation', 
                                        'placeholder' => 'Re-ingrese la Contraseña', 
                                        'class' => 'form-control input-md', 
                                        'required' => 'true',
                                        'autocomplete' => 'off'])}}                          
                         <span class="help-block">Vuelve a ingresar la contraseña</span>
                      </div>
                  </div>

                  <div class="form-group"> <!-- Select de Sexo -->
                     {{Form::label('sexo', 'Sexo', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-3">
                          {{Form::select('sexo', ['Mujer' => 'Mujer', 'Hombre' => 'Hombre', 'Otros' => 'Otros' ], '',
                                          array('id' => 'sexo',
                                                'class' => 'form-control', 
                                                'required' => 'true'))}}                          
                      </div>
                  </div>

                  <div class="form-group"> <!-- Select de Fecha de Nacimiento -->
                     {{Form::label('fecnac', 'Fecha de Nacimiento', array('class' => 'col-md-4 control-label'))}}
                      <div class="col-md-8">
                          {{Form::selectMonth('mes', '', array('id' => 'mes',
                                              'class' => 'form-control',
                                              'style' => 'width: 130px; float:left; margin-right:10px;'))}}

                          {{Form::selectRange('dia', 1, 31, '', array('id' => 'dia',
                                              'class' => 'form-control',
                                              'style' => 'width: 70px; float:left; margin-right:10px;'))}}

                          {{Form::selectYear('ano', date('Y'), date('Y')-60, '', array('id' => 'ano',
                                              'class' => 'form-control',
                                              'style' => 'width: 90px; float:left; margin-right:10px;'))}}                                              
                      </div>
                  </div>

                  <div class="form-group" style="margin-top: 35px;"> <!-- Botones de Accion -->
                    <div class="col-md-12 text-center">
                      <div class="btn-group">
                       
                        <!--{{Form::submit('Aceptar', ['id' => 'btn-ok', 'name' => 'btn-ok',
                                                   'class' => 'btn btn-default col-md-3',
                                                   'style' => 'width: 120px;'])}} -->
                        {{ Form::button('Aceptar', array('type' => 'submit', 'class' => 'btn btn-default col-md-3', 'id' => 'btn-ok', 'style' => 'width: 120px;')) }}                                                   

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