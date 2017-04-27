<?php

use Illuminate\Database\Seeder;

class Academico_2017_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anio_lectivo')->insert([
            ['anio' => 2017,'nombre'=>'Año del Buen Servicio al Ciudadano','activo'=>true],
        ]);

        DB::table('periodo')->insert([
            ['nombre'=>'I BIMESTRE','abreviatura'=>'I B','activo'=>true,'anio_lectivo_id'=> \App\Anio_Lectivo::all()->random()->id],
            ['nombre'=>'II BIMESTRE','abreviatura'=>'II B','activo'=>true,'anio_lectivo_id'=> \App\Anio_Lectivo::all()->random()->id],
            ['nombre'=>'III BIMESTRE','abreviatura'=>'III B','activo'=>true,'anio_lectivo_id'=> \App\Anio_Lectivo::all()->random()->id],
        ]);

        DB::table('nivel')->insert([
            ['nombre'=>'SECUNDARIA','abreviatura'=>'S']
        ]);

        DB::table('grado')->insert([
            ['nombre'=>'PRIMERO','numero'=>1,'activo'=>true,'grado_anterior_id'=>null,'nivel_id'=>1],
            ['nombre'=>'SEGUNDO','numero'=>2,'activo'=>true,'grado_anterior_id'=>1,'nivel_id'=>1],
            ['nombre'=>'TERCERO','numero'=>3,'activo'=>true,'grado_anterior_id'=>2,'nivel_id'=>1],
            ['nombre'=>'CUARTO','numero'=>4,'activo'=>true,'grado_anterior_id'=>3,'nivel_id'=>1],
            ['nombre'=>'QUINTO','numero'=>5,'activo'=>true,'grado_anterior_id'=>4,'nivel_id'=>1],
            ['nombre'=>'SEXTO','numero'=>6,'activo'=>true,'grado_anterior_id'=>5,'nivel_id'=>1],
        ]);

        DB::table('seccion')->insert([
            ['letra'=>'A','vacantes'=>30,'activo'=>true,'turno'=>'M','tipo_calificacion'=>'L','grado_id'=>\App\Grado::all()->random()->id,'anio_lectivo_id'=>\App\Anio_Lectivo::all()->random()->id,'trabajador_id'=>null],
            ['letra'=>'B','vacantes'=>30,'activo'=>true,'turno'=>'M','tipo_calificacion'=>'L','grado_id'=>\App\Grado::all()->random()->id,'anio_lectivo_id'=>\App\Anio_Lectivo::all()->random()->id,'trabajador_id'=>\App\Trabajador::all()->random()->id],
            ['letra'=>'B','vacantes'=>30,'activo'=>true,'turno'=>'T','tipo_calificacion'=>'L','grado_id'=>\App\Grado::all()->random()->id,'anio_lectivo_id'=>\App\Anio_Lectivo::all()->random()->id,'trabajador_id'=>\App\Trabajador::all()->random()->id]
        ]);

    }
}
