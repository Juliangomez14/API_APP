<?php

use Illuminate\Database\Seeder;
use App\EstadoDisponibilidad;
use Faker\Factory as Faker;

class estado_disponibilidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $EstadoDisponibilidad=EstadoDisponibilidad::create([
            'status'=>'Disponible'
        ]);

        $EstadoDisponibilidad=EstadoDisponibilidad::create([
            'status'=>'No Disponible'
        ]);

    }
}
