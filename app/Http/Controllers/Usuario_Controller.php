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
        $usuario->alias = $request->input('alias');
        $usuario->clave = Bcrypt($request->input('clave'));
        $usuario->tipo = $request->input('tipo');
        $usuario->activo = $request->input('activo');
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
    public function update(Request $request, $id)
    {
        $usuario = \App\Usuario::find($id);
        $usuario->alias = $request->input('alias');
        $usuario->clave = $request->bcrypt(input('clave'));
        $usuario->tipo = $request->input('tipo');
        $usuario->activo = $request->input('activo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = \App\Usuario::find($id);
        $usuario->delete();
    }
}
