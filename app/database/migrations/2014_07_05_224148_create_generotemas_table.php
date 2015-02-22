<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerotemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('genero_temas', function(Blueprint $table)
		{
			Schema::create('genero_temas', function($table){
				$table->bigInteger('genero_id');
				$table->bigInteger('tema_id');
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
		Schema::table('genero_temas', function(Blueprint $table)
		{
			Schema::drop('genero_temas');
		});
	}

}
