<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Opcion_Menu_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intranet/website/opcion_menu');
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
        $opcion_menu = new \App\Opcion_Menu();
        $opcion_menu->orden = $request->input('orden');
        $opcion_menu->opcion_superior_id = $request->input('opcion_superior_id');
        $opcion_menu->nombre = $request->input('nombre');
        $opcion_menu->url = $request->input('url');
        $opcion_menu->publico = $request->input('publico');
        $opcion_menu->save();
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
            return \App\Opcion_Menu::find($id);
        } else if($id == "*"){
            return \App\Opcion_Menu::all();
        }
    }

    public function listar()
    {
        $opcion_menus =  \App\Opcion_Menu::all();
        foreach ($opcion_menus as $opcion_menu){
            if($opcion_menu->opcion_superior_id !== null)
                $opcion_menu->opcion_superior;
        }
        return $opcion_menus;
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
        $opcion_menu = \App\Opcion_Menu::find($id);
        $opcion_menu->orden = $request->input('orden');
        $opcion_menu->opcion_superior_id = $request->input('opcion_superior_id');
        $opcion_menu->nombre = $request->input('nombre');
        $opcion_menu->url = $request->input('url');
        $opcion_menu->publico = $request->input('publico');
        $opcion_menu->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opcion_menu = \App\Opcion_Menu::find($id);
        $opcion_menu->delete();
    }
}
