<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\Publicaciones;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Imagenes::all();
        return view('galeria.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagenes' => 'required',
        ],[
            'titulo.required' => 'Título es requerido',
            'descripcion.required' => 'Descripción es requerida',
            'imagenes.required' => 'Agregue la imagen a subir'
        ]);

        $nameImage = $request->imagenes->getClientOriginalName();
        $imagenes = new Imagenes();
        $imagenes->imagenes = $nameImage;
        $request->imagenes->move(public_path('images'), $nameImage);
        $imagenes->save();
        Publicaciones::create(array_merge($request->only('titulo','descripcion','id_imagen'),['id_imagen'=>$imagenes->id]));
        return redirect()->to('/galeria');
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
