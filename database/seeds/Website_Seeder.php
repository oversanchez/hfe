<?php

use Illuminate\Database\Seeder;

class Website_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
            ["orden" => 1,"url_vinculo"=>"#","nombre_vinculo"=>"","nombre" => "Entrada Principal","url_foto"=> "/royal/img/rosario/slider1.jpg","publico"=> true],
            ["orden" => 2,"url_vinculo"=>"#","nombre_vinculo"=>"","nombre" => "Formación General","url_foto"=> "/royal/img/rosario/slider2.jpg","publico"=> true],
            ["orden" => 3,"url_vinculo"=>"#","nombre_vinculo"=>"","nombre" => "Cerca de Dios","url_foto"=> "/royal/img/rosario/slider3.jpg","publico"=> true],
            ["orden" => 4,"url_vinculo"=>"#","nombre_vinculo"=>"","nombre" => "Pabellón","url_foto"=> "/royal/img/rosario/slider4.jpg","publico"=> true],
        ]);

        DB::table('noticia')->insert([
            ["nombre" => "Trump visitará estos países en su primer viaje al exterior","fecha"=>"06/05/2017","descripcion"=>"El presidente de Estados Unidos iniciará su gira a fines de mayo. También asistirá a dos importantes cumbres","url_foto"=> "http://cde.3.elcomercio.pe/ima/0/1/6/7/9/1679737/base_image.jpg","publico"=> true],
            ["nombre" => "Así es el misil intercontinental que probó EE.UU","fecha"=>"14/05/2017","descripcion"=>"El proyectil, capaz de llevar una ojiva nuclear, viajó unos 6.700 km sobre el Océano Pacífico y cayó en las Islas Marshall","url_foto"=> "https://cdnmundo2.img.sputniknews.com/images/105322/53/1053225389.jpg","publico"=> true],
            ["nombre" => "¿Qué hará China si atacan a su socio Corea del Norte?","fecha"=>"02/05/2017","descripcion"=>"Estos dos países son tan cercanos como los labios y los dientes, dijo alguna vez el máximo dirigente chino Mao Tse tung","url_foto"=> "http://cde.3.elcomercio.pe/ima/0/1/6/7/9/1679795/base_image.jpg","publico"=> true],
            ["nombre" => "Caso Odebrecht: correos revelan discrepancias por gasoducto","fecha"=>"08/05/2017","descripcion"=>"Comunicaciones a Castilla dan cuenta de frustrados intentos para que Odebrecht no quedara como único postor de gasoducto","url_foto"=> "http://cde.3.elcomercio.pe/ima/0/1/5/8/5/1585631/base_image.jpg","publico"=> true],
        ]);

        DB::table('evento')->insert([
            ["nombre" => "Día de la Madre 2017","fecha"=>"14/05/2017","hora"=>"9:00 a.m.","lugar"=>"Colegio Rosario","descripcion"=>"El Día de la Madre o Día de las Madres es una festividad que se celebra en honor a las madres en todo el mundo, en diferentes fechas del año según el país","publico"=>true],
            ["nombre" => "Día de la Padre 2017","fecha"=>"18/06/2017","hora"=>"9:00 a.m.","lugar"=>"Colegio Rosario","descripcion"=>"El día del Padre o día de los Padres es un día conmemorativo en el cual se celebra al padre dentro de la familia con la intención de reconocer la paternidad responsable y amorosa","publico"=>true],
            ["nombre" => "Día del Trabajo","fecha"=>"1/05/2017","hora"=>"9:00 a.m.","lugar"=>"Colegio Rosario","descripcion"=>"El Primero de Mayo se celebra el Día del Trabajo en honor a todos los hombres y mujeres que con su labor diaria buscan un mejor futuro y hacer crecer a la sociedad.","publico"=>true],
        ]);

        DB::table('enlace_rapido')->insert([
            ["nombre" => "Comunicado Nº 1023 : Agradecimiento a Padres de familia","url"=>"#","categoria"=>"CO","orden"=>0,"color"=>"","publico"=>true],
            ["nombre" => "Comunicado Nº 1030 : Premiacion de estudiantes","url"=>"#","categoria"=>"CO","orden"=>0,"color"=>"red","publico"=>true],
            ["nombre" => "Comunicado Nº 1031 : Calendarización 2017","url"=>"#","categoria"=>"CO","orden"=>0,"color"=>"","publico"=>true],

            ["nombre" => "Lista de primeros puestos","url"=>"#","categoria"=>"DO","orden"=>0,"color"=>"black","publico"=>true],
            ["nombre" => "Ficha de Matricula 2017","url"=>"#","categoria"=>"DO","orden"=>0,"color"=>"green","publico"=>true],

            ["nombre" => "App Android Rosarina","url"=>"#","categoria"=>"DE","orden"=>0,"color"=>"chocolate","publico"=>true],
        ]);

        DB::table('opcion_menu')->insert([
            ["orden"=>1,"nombre" => "INICIO","url"=>"/","opcion_superior_id"=>null,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>2,"nombre" => "FILOSOFÍA INSTITUCIONAL","url"=>"#","opcion_superior_id"=>null,"tipo"=>"L","publico"=>true,"nro_opciones"=>5],
            ["orden"=>3,"nombre" => "PASTORAL","url"=>"#","opcion_superior_id"=>null,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>4,"nombre" => "INFRAESTRUCTURA","url"=>"#","opcion_superior_id"=>null,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>5,"nombre" => "ÁREA DE FORMACIÓN","url"=>"#","opcion_superior_id"=>null,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>6,"nombre" => "ACTUALIDAD","url"=>"#","opcion_superior_id"=>null,"tipo"=>"B","publico"=>true,"nro_opciones"=>0],

            ["orden"=>1,"nombre" => "Reseña Histórica","url"=>"#","opcion_superior_id"=>2,"tipo"=>"L","publico"=>true,"nro_opciones"=>1],
            ["orden"=>2,"nombre" => "Misión y Visión","url"=>"#","opcion_superior_id"=>2,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>4,"nombre" => "Perfiles","url"=>"#","opcion_superior_id"=>2,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>3,"nombre" => "Valores Institucionales","url"=>"#","opcion_superior_id"=>2,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
            ["orden"=>5,"nombre" => "Himno al colegio","url"=>"#","opcion_superior_id"=>2,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],

            ["orden"=>1,"nombre" => "Sub Opcion 1","url"=>"#","opcion_superior_id"=>7,"tipo"=>"L","publico"=>true,"nro_opciones"=>0],
        ]);

        


    }
}
