<?php 

class Genero extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'generos';
	protected $fillable = ['id', 'nombre'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	public function temas(){
		return $this->belongsToMany('Tema', 'genero_temas');
	}

}