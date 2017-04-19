<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Grado_Profesional_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mantenimientos/grado_profesional');
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
        $grado_profesional = new \App\Grado_Profesional();
        $grado_profesional->nombre = $request->input('nombre');
        $grado_profesional->abreviatura = $request->input('abreviatura');
        $grado_profesional->save();
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
            return \App\Grado_Profesional::find($id);
        } else if($id == "*"){
            return \App\Grado_Profesional::all();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $grado_profesional = \App\Grado_Profesional::find($id);
        $grado_profesional->nombre = $request->input('nombre');
        $grado_profesional->abreviatura = $request->input('abreviatura');
        $grado_profesional->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grado_profesional = \App\Grado_Profesional::find($id);
        $grado_profesional->delete();
    }
}
