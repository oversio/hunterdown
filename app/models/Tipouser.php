<?php 

class Tipouser extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tipousers';
	protected $fillable = ['id', 'descripcion'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	public function users(){
		return $this->hasMany('User');
	}

}