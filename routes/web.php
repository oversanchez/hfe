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

Route::get('/', function () {
    return view('login');
});

Route::group(['prefix'=>'mantenimientos'], function () {

    Route::resource('anio_lectivo','\App\Http\Controllers\Anio_Lectivo_Controller');

    Route::get('periodo/listar', ['uses' => 'Periodo_Controller@listar', 'as' => 'periodo.listar']);

    Route::resource('periodo','\App\Http\Controllers\Periodo_Controller');

    Route::resource('nivel','\App\Http\Controllers\Nivel_Controller');

    Route::get('grado/listar', ['uses' => 'Grado_Controller@listar', 'as' => 'grado.listar']);

    Route::resource('grado','\App\Http\Controllers\Grado_Controller');

    Route::resource('especialidad','\App\Http\Controllers\Especialidad_Controller');

    Route::resource('categoria_trabajador','\App\Http\Controllers\Categoria_Trabajador_Controller');

    Route::resource('parentesco','\App\Http\Controllers\Parentesco_Controller');

    Route::resource('grado_profesional','\App\Http\Controllers\Grado_Profesional_Controller');

    Route::resource('colegio_procedencia','\App\Http\Controllers\Colegio_Procedencia_Controller');

    Route::get('trabajador/listar', ['uses' => 'Trabajador_Controller@listar', 'as' => 'trabajador.listar']);

    Route::resource('trabajador','\App\Http\Controllers\Trabajador_Controller');

    Route::get('persona/buscar_numero_documento', ['uses' => 'Persona_Controller@buscar_numero_documento', 'as' => 'trabajador.buscar_numero_documento']);

    Route::resource('persona','\App\Http\Controllers\Persona_Controller');

    Route::resource('miembro_familia','\App\Http\Controllers\Miembro_Familia_Controller');
    
    Route::resource('familia','\App\Http\Controllers\Familia_Controller');

    //Route::get('periodo_academico/listar','\App\Http\Controllers\Periodo_Academico_Controller@listar');



});


