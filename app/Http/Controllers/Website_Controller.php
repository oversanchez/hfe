<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Website_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciones = \App\Opcion_Menu::where('publico',true)->orderBy('orden','asc')->get();
        $sliders = \App\Slider::where('publico',true)->orderBy('orden','asc')->get();
        $eventos = \App\Evento::where('publico',true)->orderBy('fecha', 'asc')->get();
        $noticias = \App\Noticia::where('publico',true)->orderBy('fecha', 'desc')->get();

        $comunicados = \App\Enlace_Rapido::where('publico',true)->where('categoria','CO')->orderBy('orden','asc')->get();
        $documentos = \App\Enlace_Rapido::where('publico',true)->where('categoria','DO')->orderBy('orden','asc')->get();
        $descargas = \App\Enlace_Rapido::where('publico',true)->where('categoria','DE')->orderBy('orden','asc')->get();

        return view('website/principal',['sliders'=>$sliders,'comunicados'=>$comunicados,'documentos'=>$documentos,'descargas'=>$descargas,'eventos' => $eventos,'noticias'=>$noticias,'opciones'=>$opciones]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
