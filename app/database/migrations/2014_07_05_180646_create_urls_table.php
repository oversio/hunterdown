<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('urls', function(Blueprint $table)
		{
			Schema::create('urls', function ($table){
				$table->bigIncrements('id');
				$table->bigInteger('articulo_id');
				$table->integer('servidor_id');
				$table->string('url');
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
		Schema::table('urls', function(Blueprint $table)
		{
			Schema::drop('urls');
		});
	}

}
