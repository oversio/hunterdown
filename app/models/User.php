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
