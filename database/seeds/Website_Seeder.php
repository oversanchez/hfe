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
            ["orden" => 1,"url_vinculo"=>"www.google.com","nombre_vinculo"=>"Aqui","nombre" => "aaaa","url_foto"=> "http://themes.iamabdus.com/royal/1.3/img/home/slider/slider_image_1.jpg","publico"=> true],
            ["orden" => 2,"url_vinculo"=>"#","nombre_vinculo"=>"","nombre" => "bbbb","url_foto"=> "http://themes.iamabdus.com/royal/1.3/img/home/slider/slider_image_2.jpg","publico"=> true],
        ]);

        DB::table('noticia')->insert([
            ["nombre" => "Trump visitará estos países en su primer viaje al exterior","fecha"=>"06/05/2017","descripcion"=>"El presidente de Estados Unidos iniciará su gira a fines de mayo. También asistirá a dos importantes cumbres","url_foto"=> "http://cde.3.elcomercio.pe/ima/0/1/6/7/9/1679737/base_image.jpg","publico"=> true],
            ["nombre" => "Así es el misil intercontinental que probó EE.UU","fecha"=>"14/05/2017","descripcion"=>"El proyectil, capaz de llevar una ojiva nuclear, viajó unos 6.700 km sobre el Océano Pacífico y cayó en las Islas Marshall","url_foto"=> "https://cdnmundo2.img.sputniknews.com/images/105322/53/1053225389.jpg","publico"=> true],
            ["nombre" => "¿Qué hará China si atacan a su socio Corea del Norte?","fecha"=>"02/05/2017","descripcion"=>"Estos dos países son tan cercanos como los labios y los dientes, dijo alguna vez el máximo dirigente chino Mao Tse tung","url_foto"=> "http://cde.3.elcomercio.pe/ima/0/1/6/7/9/1679795/base_image.jpg","publico"=> true],
        ]);

        DB::table('evento')->insert([
            ["nombre" => "Día de la Madre 2017","fecha"=>"14/05/2017","hora"=>"9:00 a.m.","lugar"=>"Colegio Rosario","descripcion"=>"El Día de la Madre o Día de las Madres es una festividad que se celebra en honor a las madres en todo el mundo, en diferentes fechas del año según el país","publico"=>true],
        ]);

        


    }
}
