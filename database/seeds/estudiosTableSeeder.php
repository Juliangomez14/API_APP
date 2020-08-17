<?php

use Illuminate\Database\Seeder;
use App\Estudio;
use Faker\Factory as Faker;

class estudiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=200; $i++){
            $Trabajador=Estudio::create([
                'titulo_academico'=> $faker->bs,
                'universidad_institucion'=> $faker->catchPhrase,
                'year_finalizacion'=> $faker->date,
                'lugar'=> $faker->city
            ]);
        }
    }
}
