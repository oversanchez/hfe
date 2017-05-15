<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Image;

class Foto_Controller extends Controller
{
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album_id = $request->input('album_id');
        $path = public_path() . '/royal/img/galeria/'.$album_id."/";
        $files = $request->file('file');
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $archivo = time().$fileName;

            $foto = new \App\Foto();
            $foto->nombre = $fileName;
            $foto->archivo = "/royal/img/galeria/".$album_id."/".$archivo;
            $foto->extension = $fileExtension;

            $foto->album_id = $album_id;
            $foto->publico = true;
            $foto->save();

            $file->move($path,$archivo);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    function show($id)
    {

    }

    public function listar()
    {
        return \App\Foto::where('album_id',Input::get('album_id'))->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    function edit($id)
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

    function update(Request $request, $id)
    {
        $foto = \App\Foto::find($id);
        $foto->nombre = $request->input('nombre');
        $foto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    function destroy($id)
    {
        $foto = \App\Foto::find($id);
        if(File::exists($foto->archivo))
            File::delete($foto->archivo);
        $foto->delete();
    }
}
