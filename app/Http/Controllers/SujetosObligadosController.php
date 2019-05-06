<?php

namespace App\Http\Controllers;

use App\SujetosObligados;
use Illuminate\Http\Request;

class SujetosObligadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SujetosObligados=SujetosObligados::orderby("id_sujetos_obligados")->get();
        return view("SujetosObligados.index", compact("SujetosObligados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("SujetosObligados.create");
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
        $SujetosObligados=array('lugar'=>$request->lugar,
            'fecha'=>$request->fecha,'hora'=>$request->hora);
        SujetosObligados::create($SujetosObligados);
        return redirect("SujetosObligados");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SujetosObligados  $sujetosObligados
     * @return \Illuminate\Http\Response
     */
    public function show(SujetosObligados $sujetosObligados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SujetosObligados  $sujetosObligados
     * @return \Illuminate\Http\Response
     */
    public function edit(SujetosObligados $sujetosObligados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SujetosObligados  $sujetosObligados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SujetosObligados $sujetosObligados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SujetosObligados  $sujetosObligados
     * @return \Illuminate\Http\Response
     */
    public function destroy(SujetosObligados $sujetosObligados)
    {
        //
    }
}
