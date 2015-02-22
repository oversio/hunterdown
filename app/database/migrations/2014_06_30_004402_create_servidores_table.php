<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServidoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servidores', function(Blueprint $table)
		{
			Schema::create('servidores', function($table){
				$table->Increments('id');
				$table->string('nombre', 40);
				$table->string('logo');
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
		Schema::table('servidores', function(Blueprint $table)
		{
			Schema::drop('servidores');
		});
	}

}
