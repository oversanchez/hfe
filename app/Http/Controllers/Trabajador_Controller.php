<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Trabajador_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mantenimientos/trabajador');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $controlador = new \App\Http\Controllers\Persona_Controller();
        $persona = $controlador->store($request);

        $trabajador = \App\Trabajador::where('persona_id', $persona->id)->firstOrFail();
        if($trabajador == null){
            $trabajador = new \App\Trabajador();
        }

        $trabajador->persona_id = $persona->id;
        $trabajador->grado_profesional_id= $request->input('grado_profesional_id');
        $trabajador->especialidad_id= $request->input('especialidad_id');
        $trabajador->categoria_trabajador_id= $request->input('categoria_trabajador_id');
        $trabajador->activo= $request->input('activo');
        $trabajador->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (is_numeric($id)) {
            $trabajador = \App\Trabajador::find($id);
            $trabajador->persona;
            $trabajador->grado_profesional;
            $trabajador->categoria_trabajador;
            $trabajador->especialidad;
            return $trabajador;
        }
    }

    public function listar()
    {
        $trabajadores =  \App\Trabajador::all();
        foreach ($trabajadores as $trabajador){
            $trabajador->persona;
            $trabajador->grado_profesional;
            $trabajador->categoria_trabajador;
            $trabajador->especialidad;
        }
        return $trabajadores;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trabajador = \App\Trabajador::find($id);

        $controlador = new \App\Http\Controllers\Persona_Controller();
        $controlador->update($request,$trabajador->persona_id);

        $trabajador->grado_profesional_id= $request->input('grado_profesional_id');
        $trabajador->especialidad_id= $request->input('especialidad_id');
        $trabajador->categoria_trabajador_id= $request->input('categoria_trabajador_id');
        $trabajador->activo= $request->input('activo');
        $trabajador->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajador = \App\Trabajador::find($id);
        $trabajador->delete();
    }
}
