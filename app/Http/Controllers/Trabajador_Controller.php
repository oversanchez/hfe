<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $persona = new \App\Persona();
        $persona->nombres = $request->input('nombres');
        $persona->apellido_paterno = $request->input('apellido_paterno');
        $persona->apellido_materno = $request->input('apellido_materno');
        $persona->numero_documento= $request->input('numero_documento');
        $persona->tipo_documento= $request->input('tipo_documento');
        $persona->fecha_nacimiento= $request->input('fecha_nacimiento');
        $persona->sexo= $request->input('sexo');
        $persona->direccion= $request->input('direccion');
        $persona->email= $request->input('email');
        $persona->telf_movil= $request->input('telf_movil');
        $persona->telf_fijo= $request->input('telf_fijo');

        $persona->save();

        $trabajador = new \App\Trabajador();
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
        $persona = \App\Persona::find($trabajador->persona_id);

        $persona->nombres = $request->input('nombres');
        $persona->apellido_paterno = $request->input('apellido_paterno');
        $persona->apellido_materno = $request->input('apellido_materno');
        $persona->numero_documento= $request->input('numero_documento');
        $persona->tipo_documento= $request->input('tipo_documento');
        $persona->fecha_nacimiento= $request->input('fecha_nacimiento');
        $persona->sexo= $request->input('sexo');
        $persona->direccion= $request->input('direccion');
        $persona->email= $request->input('email');
        $persona->telf_movil= $request->input('telf_movil');
        $persona->telf_fijo= $request->input('telf_fijo');

        $persona->save();

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
