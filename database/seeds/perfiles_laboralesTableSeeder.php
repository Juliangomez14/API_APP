<?php

use Illuminate\Database\Seeder;
use App\PerfilLaboral;
use Faker\Factory as Faker;

class perfiles_laboralesTableSeeder extends Seeder
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
        for($i=0; $i<=50; $i++){
            $contador=$contador+1;
            $Trabajador=PerfilLaboral::create([
                'perfil'=> $faker->paragraph,
                'trabajadores_id'=> $contador
            ]);
        }
    }
}
