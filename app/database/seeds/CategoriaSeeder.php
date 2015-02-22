<?php 
	class CategoriaSeeder extends Seeder
	{
		
		function run()
		{
			// $faker = Faker\Factory::create();

			DB::table('categorias')->delete();

			Categoria::create(array(				 	 
					 'nombre' => 'Películas'
					 ));			

			Categoria::create(array(
					 'nombre' => 'Series'
					 ));
			Categoria::create(array(
					 'nombre' => 'Ánime'
					 ));
		}
	}
?>