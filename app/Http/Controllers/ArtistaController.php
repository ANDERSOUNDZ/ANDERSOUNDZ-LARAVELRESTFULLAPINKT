<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artista;
use Illuminate\Support\Facades\Facade;

class ArtistaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artista = Artista::all();
        return $artista; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artista = new Artista();
        $artista->nombre_artista = $request->nombre_artista;
        $artista->edad = $request->edad;
        $artista->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $artista = Artista::findOrFail($request->id);
        return $artista;

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
        $artista = Artista::findOrFail($request->id);
        $artista->nombre_artista = $request->nombre_artista;
        $artista->edad = $request->edad;
        $artista->save();
        return $artista;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $artista = Artista::destroy($request->id);
        
        return $artista;
    }
}
