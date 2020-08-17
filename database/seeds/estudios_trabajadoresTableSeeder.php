<?php

use Illuminate\Database\Seeder;
use App\EstudioTrabajador;
use Faker\Factory as Faker;

class estudios_trabajadoresTableSeeder extends Seeder
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

        for($i=1; $i<=200; $i++){
            $contador= $contador+1;

            $Trabajador=EstudioTrabajador::create([
                'perfiles_laborales_id'=> $contador,
                'estudios_id'=> $i
            ]);

            if($contador==4){
                $contador=0;
            }
        }
    }
}
