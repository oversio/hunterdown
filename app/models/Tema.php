<?php 

class Tema extends Eloquent {

	// use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'temas';
	protected $fillable = ['categoria_id','user_id','titulo','temporada','sinopsis','ano','fechahora','pagoficial','info','trailer','descargas','poster'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	
	public function categorias(){
		return $this->belongsTo('Categoria');
	}

	public function generos(){
		return $this->belongsToMany('Genero', 'genero_temas');
	}

	public function user(){
		return $this->belongsTo('User');
	}

	public function ratings(){
		return $this->hasMany('Rating');
	}

	public function articulos(){
		return $this->hasMany('Articulo');
	}
}