<?php

use Illuminate\Database\Seeder;
use App\ExperienciaTrabajador;
use Faker\Factory as Faker;

class experiencia_trabajadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contador=0;

        for($i=1; $i<=150; $i++){
            $contador= $contador+1;

            $Trabajador=ExperienciaTrabajador::create([
                'trabajadores_id'=> $contador,
                'experiencias_id'=> $i
            ]);

            if($contador==3){
                $contador=0;
            }
        }
    }
}
