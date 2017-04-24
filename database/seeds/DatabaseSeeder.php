<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Categoria_Trabajador_Seeder::class);
        $this->call(Grado_Profesional_Seeder::class);
        $this->call(Especialidad_Seeder::class);
        $this->call(Persona_Seeder::class);
        $this->call(Parentesco_Seeder::class);
        $this->call(Colegio_Procedencia_Seeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
