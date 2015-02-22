<?php 

class Url extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Urls';
	// protected $fillable = ['nombre'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function articulos(){
		return $this->belongsTo('Articulo');
	}

	public function servidores(){
		return $this->belongsTo('Servidor');
	}
}