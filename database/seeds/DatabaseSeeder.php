<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(estado_disponibilidadesTableSeeder::class);
        $this->call(trabajadoresTableSeeder::class);
        $this->call(experienciasTableSeeder::class);
        $this->call(experiencia_trabajadoresTableSeeder::class);
        $this->call(perfiles_laboralesTableSeeder::class);
        $this->call(estudiosTableSeeder::class);
        $this->call(estudios_trabajadoresTableSeeder::class);
    }
}
