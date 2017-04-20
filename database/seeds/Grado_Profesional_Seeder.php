<?php

use Illuminate\Database\Seeder;

class Grado_Profesional_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grado_profesional')->insert([
            ['nombre' => "BACHILLER",'abreviatura' => "BACH"],
            ['nombre' => "INGENIERO",'abreviatura' => "ING"],
            ['nombre' => "LICENCIADO",'abreviatura' => "LIC"],
            ['nombre' => "MAGISTER",'abreviatura' => "MAG"],
            ['nombre' => "DOCTOR",'abreviatura' => "DR"]
        ]);
    }
}
