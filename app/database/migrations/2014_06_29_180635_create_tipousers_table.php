<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipousersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tipousers', function(Blueprint $table)
		{
			Schema::create('tipousers', function($table){
				$table->Increments('id');
				$table->String('descripcion', 50);
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
		Schema::table('tipousers', function(Blueprint $table)
		{
			Schema::drop('tipousers');
		});
	}

}
