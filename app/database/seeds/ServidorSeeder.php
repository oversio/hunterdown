<?php 
	class ServidorSeeder extends Seeder
	{
		
		function run()
		{
			$faker = Faker\Factory::create();

			DB::table('servidores')->delete();

			Servidor::create(array(
					'id' => 1,
					'nombre' => 'torrent',
					'logo' => 'servidores/1.png'
					));			

			Servidor::create(array(
					'id' => 2,
					'nombre' => 'eLink',
					'logo' => ''
					));			

			Servidor::create(array(
					'id' => 3,
					'nombre' => 'MediaFire',
					'logo' => 'servidores/3.png'
					));			

			Servidor::create(array(
					'id' => 4,
					'nombre' => 'Mega',
					'logo' => 'servidores/4.png'
					));			

			Servidor::create(array(
					'id' => 5,
					'nombre' => 'RapidShare',
					'logo' => 'servidores/5.png'
					));			
		}
	}
?>