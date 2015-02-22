<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('temas', function(Blueprint $table)
		{
			Schema::create('temas', function($table){
				$table->bigIncrements('id');
				$table->integer('categoria_id');
				$table->bigInteger('user_id');
				$table->string('titulo', 150);
				$table->tinyInteger('temporada');
				$table->text('sinopsis');
				$table->smallInteger('ano');
				$table->dateTime('fechahora');
				$table->string('pagoficial');
				$table->string('info', 50);
				$table->string('trailer');
				$table->string('formato', 20);
				$table->bigInteger('descargas');
				$table->string('poster');
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
		Schema::table('temas', function(Blueprint $table)
		{
			Schema::drop('temas');
		});
	}

}
