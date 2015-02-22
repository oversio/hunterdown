<?php 

class Rating extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ratings';
	// protected $fillable = ['nombre'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function users(){
		return $this->belongsTo('User');
	}

	public function temas(){
		return $this->belongsTo('Tema');
	}

}