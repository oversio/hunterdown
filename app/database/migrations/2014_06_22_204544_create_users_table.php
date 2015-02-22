<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			Schema::create('users', function($table){
				$table->bigIncrements('id');
				$table->integer('tipouser_id')->default('3');
				$table->string('nombre',90);
				$table->string('usuario',80)->unique();
				$table->string('email',140)->unique();
				$table->string('password');
				$table->date('fecnac');
				$table->enum('sexo', array('Mujer','Hombre','Otros'));
				$table->tinyInteger('status')->default('1');
				$table->rememberToken();				
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
		Schema::table('users', function(Blueprint $table)
		{
			Schema::drop('users');
		});
	}

}
