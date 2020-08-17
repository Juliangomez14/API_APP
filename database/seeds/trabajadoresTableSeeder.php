<?php

use Illuminate\Database\Seeder;
use App\Trabajador;
use Faker\Factory as Faker;

class trabajadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=50; $i++){
            $Trabajador=Trabajador::create([
                'name'=> $faker->name,
                'lastname'=> $faker->lastname,
                'email'=> $faker->email,
                'Telephone'=> $faker->unixTime,
                'adress'=> $faker->streetAddress,
                'id_estado_disponibilidades'=> 1
            ]);
        }
    }
}
