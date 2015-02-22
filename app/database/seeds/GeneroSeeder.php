<?php 
	class GeneroSeeder extends Seeder
	{
		
		function run()
		{
			$faker = Faker\Factory::create();

			DB::table('generos')->delete();

			$id = 1;
			Genero::create(array('id' => $id, 'nombre' => 'Aventura'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Fantasía'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Drama'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Terror'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Comedia'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Suspenso'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Acción'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Ciencia Ficción'));
			$id++;			
			Genero::create(array('id' => $id, 'nombre' => 'Dibujos Animados'));					
		}
	}
?>