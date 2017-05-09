<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Noticia_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intranet/website/noticia');
    }
    
    public function ver_noticia($id)
    {
        $opciones = \App\Opcion_Menu::where('publico',true)->orderBy('orden','asc')->get();
        $noticia = \App\Noticia::find($id);
        return view('website/noticias',['noticia'=>$noticia,'opciones'=>$opciones]);
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
        $noticia = new \App\Noticia();
        $noticia->nombre = $request->input('nombre');
        $noticia->descripcion = $request->input('descripcion');
        $noticia->contenido = $request->input('contenido');
        $noticia->fecha = $request->input('fecha');
        $noticia->url_foto = $request->input('url_foto');
        $noticia->publico= $request->input('publico');
        $noticia->save();
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
            return \App\Noticia::find($id);
        } else if($id == "*"){
            return \App\Noticia::all();
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
        $noticia = \App\Noticia::find($id);
        $noticia->nombre = $request->input('nombre');
        $noticia->descripcion = $request->input('descripcion');
        $noticia->contenido = $request->input('contenido');
        $noticia->fecha = $request->input('fecha');
        $noticia->url_foto = $request->input('url_foto');
        $noticia->publico= $request->input('publico');
        $noticia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = \App\Noticia::find($id);
        $noticia->delete();
    }
}
