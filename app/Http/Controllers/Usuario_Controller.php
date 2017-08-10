<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intranet/mantenimientos/usuario');
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
        $usuario = new \App\Usuario();
        $tipo = $request->input('tipo');
        $persona_id = $request->input('persona_id');
        $usuario->alias = $request->input('alias');
        $usuario->tipo = $tipo;
        $usuario->persona_id= $persona_id;
        $usuario->clave = Bcrypt($request->input('clave'));
        $usuario->cambia_clave= $request->input('cambia_clave');
        $usuario->activo = $request->input('activo');

        $usuario->save();
        switch($tipo){
            case "TR":
                $trabajador =  \App\Trabajador::find($persona_id);
                $trabajador->usuario_id = $usuario->id;
                $trabajador->save();
                break;
            case "AL":
                $alumno =  \App\Alumno::find($persona_id);
                $alumno->usuario_id = $usuario->id;
                $alumno->save();
                break;
        }
    }

    public function update(Request $request, $id)
    {
        $usuario = \App\Usuario::find($id);
        $usuario->alias = $request->input('alias');
        $usuario->cambia_clave = $request->input('cambia_clave');
        $usuario->activo = $request->input('activo');
        $usuario->save();
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
            return \App\Usuario::find($id);
        } else if($id == "*"){
            return \App\Usuario::all();
        }
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = \App\Usuario::find($id);
        $tipo = $usuario->tipo;
        switch($tipo){
            case "TR":
                $trabajador = \App\Trabajador::find($usuario->persona_id);
                $trabajador->usuario_id = null;
                $trabajador->save();
                break;
            case "AL":
                $alumno = \App\Alumno::find($usuario->persona_id);
                $alumno->usuario_id = null;
                $alumno->save();
                break;
        }
        $usuario->delete();
    }
}
