<?php

use Illuminate\Database\Seeder;
use App\Experiencia;
use Faker\Factory as Faker;

class experienciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=150; $i++){
            $Trabajador=Experiencia::create([
                'nombre_empresa'=> $faker->company,
                'actividades_ejecutadas'=> $faker->paragraph,
                'fecha_inicio_contrato'=> $faker->date,
                'fecha_fin_contrato'=> $faker->date
            ]);
        }
    }
}
