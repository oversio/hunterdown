<?php 
	class UserSeeder extends Seeder
	{
		
		function run()
		{
			$faker = Faker\Factory::create();

			DB::table('users')->delete();

			User::create(array(
				'tipouser_id' => 1,
				'nombre' => 'Over Martinez',
				'usuario' => 'oversio',
				'email' => 'overmartinez@gmail.com',
				'password' => 18574680,
				'fecnac' => '1986-7-25',
				'sexo' => 'Hombre'
				));

			for ($i=1; $i <= 10; $i++) { 
				User::create(array(
					'tipouser_id' => ($i % 2) ? 3 : 2,
					'nombre' => $faker->name,
					'usuario' => $faker->userName,
					'email' => $faker->email,
					'password' => $faker->randomNumber($nbDigits = NULL),
					'fecnac' => $faker->date($format = 'Y-m-d', $max = 'now'),
					'sexo' => ($i % 2) ? 'Hombre' : 'Mujer'
					));
			}
		}
	}
?>