<?php 

class Articulo extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Articulos';
	// protected $fillable = ['nombre'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function urls(){
		return $this->hasMany('Url');
	}

	public function temas(){
		return $this->belongsTo('Tema');
	}

	public function comentarios(){
		return $this->hasMany('Comentario');
	}
}