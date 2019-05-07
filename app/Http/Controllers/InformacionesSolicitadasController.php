<?php

namespace App\Http\Controllers;

use App\InformacionesSolicitadas;
use Illuminate\Http\Request;

class InformacionesSolicitadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $InformacionesSolicitadas=InformacionesSolicitadas::orderby('id_informaciones_solicitadas')->get();
        return view("InformacionesSolicitadas.index",compact('InformacionesSolicitadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("InformacionesSolicitadas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $InformacionesSolicitadas=array('descripcion'=>$request->descripcion);
        InformacionesSolicitadas::create($InformacionesSolicitadas);
        return redirect("InformacionesSolicitadas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InformacionesSolicitadas  $informacionesSolicitadas
     * @return \Illuminate\Http\Response
     */
    public function show(InformacionesSolicitadas $informacionesSolicitadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InformacionesSolicitadas  $informacionesSolicitadas
     * @return \Illuminate\Http\Response
     */
    public function edit(InformacionesSolicitadas $informacionesSolicitadas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InformacionesSolicitadas  $informacionesSolicitadas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InformacionesSolicitadas $informacionesSolicitadas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InformacionesSolicitadas  $informacionesSolicitadas
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformacionesSolicitadas $informacionesSolicitadas)
    {
        //
    }
}
