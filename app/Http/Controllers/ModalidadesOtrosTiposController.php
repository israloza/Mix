<?php

namespace App\Http\Controllers;

use App\ModalidadesOtrosTipos;
use Illuminate\Http\Request;

class ModalidadesOtrosTiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ModalidadesOtrosTipos=ModalidadesOtrosTipos::orderby('id_modalidades_otros_tipos')->get();
        return view("ModalidadesOtrosTipos.index",compact('ModalidadesOtrosTipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ModalidadesOtrosTipos.create");
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
        $ModalidadesOtrostipos=array('descripcion'=>$request->descripcion);
        ModalidadesOtrosTipos::create($ModalidadesOtrostipos);
        return redirect("ModalidadesOtrosTipos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModalidadesOtrosTipos  $modalidadesOtrosTipos
     * @return \Illuminate\Http\Response
     */
    public function show(ModalidadesOtrosTipos $modalidadesOtrosTipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModalidadesOtrosTipos  $modalidadesOtrosTipos
     * @return \Illuminate\Http\Response
     */
    public function edit(ModalidadesOtrosTipos $modalidadesOtrosTipos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModalidadesOtrosTipos  $modalidadesOtrosTipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModalidadesOtrosTipos $modalidadesOtrosTipos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModalidadesOtrosTipos  $modalidadesOtrosTipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModalidadesOtrosTipos $modalidadesOtrosTipos)
    {
        //
    }
}
