<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ratings', function(Blueprint $table)
		{
			Schema::create('ratings', function($table){
				$table->bigIncrements('id');
				$table->bigInteger('tema_id');
				$table->bigInteger('user_id');
				$table->tinyInteger('rating');
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
		Schema::table('ratings', function(Blueprint $table)
		{
			Schema::drop('ratings');
		});
	}

}
