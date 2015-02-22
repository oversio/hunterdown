<?php 

class Servidor extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'servidores';
	protected $fillable = ['id', 'nombre', 'logo'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function urls(){
		return $this->hasMany('Url');
	}

}