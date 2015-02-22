<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulos', function(Blueprint $table)
		{
			Schema::create('articulos', function($table){
				$table->bigIncrements('id');
				$table->integer('tema_id');
				$table->string('titulo');
				$table->tinyInteger('episodio');
				$table->timestamps();
			});
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articulos', function(Blueprint $table)
		{
			Schema::drop('articulos');
		});
	}

}
