<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class ParticipantTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();

		for($i = 0; $i < 30; $i++){

			\DB::table('participants')->insert(array 	(

				'first_name'	=>	$faker->firstName(),
				'last_name'		=>	$faker->lastName(),
				'document_type'	=>	$faker->randomElement(array('CC','TI','CE')),
				'document'		=>	$faker->unique()->randomNumber(9),
				'email'			=>	$faker->email(),
				'type'			=>	$faker->randomElement(array('PRO','EST')),
			));
		}
	}
	
}
