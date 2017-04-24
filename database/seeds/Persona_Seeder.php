<?php

use Illuminate\Database\Seeder;

class Persona_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = factory(App\Persona::class, 3)->create();
    }
}
