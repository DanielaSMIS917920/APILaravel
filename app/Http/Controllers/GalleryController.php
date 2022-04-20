<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Resources\Gallery as GalleryResource;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::all();
        return GalleryResource::collection($galleries);
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
        $gallery = $request->isMethod('put') ? Gallery::findOrFail($request->id) : new Gallery;
        $gallery->id = $request->input('id');
        $gallery->Nombre = $request->input('Nombre');
        $gallery->Tipo = $request->input('Tipo');
        $gallery->Descripcion = $request->input('Descripcion');
        $gallery->Genero = $request->input('Genero');

        if($gallery->save()){
            return new GalleryResource($gallery);
        }
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
        //get single gallery
        $gallery = Gallery::findOrFail($id);
        //return data gallery
        return new GalleryResource($gallery);
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
        //delete gallery
        //get gallery
        $gallery = Gallery::findOrFail($id);

        //delete category
        if($gallery->delete()){
            return new GalleryResource($gallery);
        }
    }
}
