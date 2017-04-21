<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumno_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mantenimientos/alumno');
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
        $persona = \App\Persona()::where('numero_documento', $request->input('numero_documento'))->get();
        if($persona->id == null)
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

        $alumno = new \App\Alumno();
        $alumno->persona_id = $persona->id;
        $alumno->colegio_procedencia_id= $request->input('colegio_procedencia_id');
        $alumno->activo= $request->input('activo');
        $alumno->save();
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
            $alumno = \App\Alumno::find($id);
            $alumno->persona;
            $alumno->colegio_procedencia;
            return $alumno;
        }
    }

    public function listar()
    {
        $alumnos =  \App\Alumno::all();
        foreach ($alumnos as $alumno){
            $alumno->persona;
            $alumno->colegio_procedencia;
        }
        return $alumnos;
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
        $alumno = \App\Alumno::find($id);
        $persona = \App\Persona::find($alumno->persona_id);

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

        $alumno->codigo_educando= $request->input('codigo_educando');
        $alumno->activo= $request->input('activo');
        $alumno->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = \App\Alumno::find($id);
        $alumno->delete();
    }
}
