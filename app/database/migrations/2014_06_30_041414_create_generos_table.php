<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('generos', function(Blueprint $table)
		{
			Schema::create('generos', function($table){
				$table->increments('id');
				$table->string('nombre');
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
		Schema::table('generos', function(Blueprint $table)
		{
			Schema::drop('generos');
		});
	}

}
