<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = ['tipouser_id', 'nombre', 'usuario', 'email', 'password', 'fecnac', 'sexo'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public $errors;
	public function isValid($data)	{
		$errors = '';
		$messages = [
			'required'  => 'El campo :attribute es obligatorio.',
			'min'       => 'El campo :attribute no puede tener menos de :min carácteres.',
			'email'     => 'El campo :attribute debe ser un email válido.',
			'max'       => 'El campo :attribute no puede tener más de :min carácteres.',
			'unique'    => 'El campo :attribute ingresado ya está registrado',
			'confirmed' => 'Los campos :attribute deben coincidir',
			'date'		=> 'Formato de fecha invalido'
		];

		$rules = [
			'nombre'    => 'required|min:3|max:60',
			'usuario'   => 'required|min:3|max:60|unique:users',
			'email'     => 'required|confirmed|email|min:6|max:100|unique:users',
			'password'  => 'required|confirmed|min:3|max:25',
			'sexo'      => 'required|in:Mujer,Hombre,Otros',
			'fecnac'	=> 'date'
		];

		$validacion = Validator::make($data, $rules, $messages);
		if ($validacion->passes())        {
            return true;
        }
        
        $this->errors = $validacion->errors();
        
        return false;
	}


	public function setPasswordAttribute($value){
		$this->attributes['password'] = Hash::make($value);
	}

	public function tipousers(){
		return $this->belongsTo('Tipouser');
	}

	public function temas(){
		return $this->hasMany('Tema');
	}

	public function ratings(){
		return $this->hasMany('Rating');
	}

	public function comentarios(){	
		return $this->hasMany('Comentario');	
	}

}
