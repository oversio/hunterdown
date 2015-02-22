<?php 
	class TipouserSeeder extends Seeder
	{
		
		function run()
		{
			$faker = Faker\Factory::create();

			DB::table('tipousers')->delete();

			Tipouser::create(array(
					'id' => 1,
					'descripcion' => 'Administrador'
					));			

			Tipouser::create(array(
					'id' => 2,
					'descripcion' => 'Publicador'
					));			

			Tipouser::create(array(
					'id' => 3,
					'descripcion' => 'Usuario Base'
					));			
		}
	}
?>