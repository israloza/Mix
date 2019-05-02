<?php

namespace App\Http\Controllers;

use App\Administradores;
use Illuminate\Http\Request;

class AdminstradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("Administradores.index",compact('Administradores'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function show(Administradores $administradores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Administradores $administradores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administradores $administradores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administradores $administradores)
    {
        //
    }
}
