<?php

namespace App\Http\Controllers;

use App\Municipios;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Municipios=Municipios::orderby('id_municipios')->get();
        return view("Municipios.index",compact('Municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Municipios.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Municipios=array('descripcion'=>$request->descripcion);
        Municipios::create($Municipios);
        return redirect("Municipios");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function show(Municipios $municipios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Municipio=Municipios::find($id);
        return view('Municipios.edit', compact('Municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipios $Municipio)
    {
        $Municipio->update($request->all());
        return redirect("Municipios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Municipios  $municipios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Municipio=Municipios::find($id);
        $Municipio->delete();
        return redirect("Municipios");
    }
}
