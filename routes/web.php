<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/intranet/', function () {
    return view('intranet/login');
});

Route::resource('/','\App\Http\Controllers\Website_Controller');

Route::get('/noticias/{id}/ver', ['uses' => 'Noticia_Controller@ver_noticia', 'as' => 'noticia.ver_noticia']);

Route::get('/eventos/{id}/ver', ['uses' => 'Evento_Controller@ver_evento', 'as' => 'evento.ver_evento']);

Route::get('/paginas/{id}/ver', ['uses' => 'Pagina_Web_Controller@ver_pagina', 'as' => 'pagina_web.ver_pagina']);

Route::group(['prefix'=>'intranet/mantenimientos'], function () {

    Route::resource('anio_lectivo','\App\Http\Controllers\Anio_Lectivo_Controller');

    Route::get('periodo/listar', ['uses' => 'Periodo_Controller@listar', 'as' => 'periodo.listar']);

    Route::resource('periodo','\App\Http\Controllers\Periodo_Controller');

    Route::resource('nivel','\App\Http\Controllers\Nivel_Controller');

    Route::get('grado/listar', ['uses' => 'Grado_Controller@listar', 'as' => 'grado.listar']);

    Route::resource('grado','\App\Http\Controllers\Grado_Controller');

    Route::resource('especialidad','\App\Http\Controllers\Especialidad_Controller');

    Route::resource('categoria_trabajador','\App\Http\Controllers\Categoria_Trabajador_Controller');

    Route::resource('parentesco','\App\Http\Controllers\Parentesco_Controller');

    Route::resource('nivel_educativo','\App\Http\Controllers\Nivel_Educativo_Controller');

    Route::resource('colegio_procedencia','\App\Http\Controllers\Colegio_Procedencia_Controller');

    Route::get('trabajador/listar', ['uses' => 'Trabajador_Controller@listar', 'as' => 'trabajador.listar']);

    Route::get('trabajador/buscar_numero_documento', ['uses' => 'Trabajador_Controller@buscar_numero_documento', 'as' => 'trabajador.buscar_numero_documento']);

    Route::resource('trabajador','\App\Http\Controllers\Trabajador_Controller');

    Route::get('apoderado/listar', ['uses' => 'Apoderado_Controller@listar', 'as' => 'apoderado.listar']);

    Route::resource('apoderado','\App\Http\Controllers\Apoderado_Controller');

    Route::get('alumno/listar', ['uses' => 'Alumno_Controller@listar', 'as' => 'alumno.listar']);

    Route::get('alumno/buscar_numero_documento', ['uses' => 'Alumno_Controller@buscar_numero_documento', 'as' => 'alumno.buscar_numero_documento']);

    Route::resource('alumno','\App\Http\Controllers\Alumno_Controller');

    Route::get('seccion/listar', ['uses' => 'Seccion_Controller@listar', 'as' => 'seccion.listar']);

    Route::resource('seccion','\App\Http\Controllers\Seccion_Controller');

    Route::resource('usuario','\App\Http\Controllers\Usuario_Controller');

});

Route::group(['prefix'=>'intranet/website'], function () {

    Route::resource('enlace_rapido','\App\Http\Controllers\Enlace_Rapido_Controller');

    Route::resource('noticia','\App\Http\Controllers\Noticia_Controller');

    Route::resource('evento','\App\Http\Controllers\Evento_Controller');

    Route::resource('comunicado','\App\Http\Controllers\Comunicado_Controller');

    Route::resource('slider','\App\Http\Controllers\Slider_Controller');

    Route::get('opcion_menu/listar', ['uses' => 'Opcion_Menu_Controller@listar', 'as' => 'opcion_menu.listar']);

    Route::resource('opcion_menu','\App\Http\Controllers\Opcion_Menu_Controller');

    Route::resource('pagina_web','\App\Http\Controllers\Pagina_Web_Controller');

    //Route::get('periodo/listar', ['uses' => 'Periodo_Controller@listar', 'as' => 'periodo.listar']);
});

Route::get('/mensaje_texto', ['uses' => 'Sms_Controller@enviar', 'as' => 'sms.enviar']);

Route::get('resizeImage', 'ImageController@resizeImage');

Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);




