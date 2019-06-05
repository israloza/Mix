<?php

namespace App\Http\Controllers;

use App\Solicitudes;
use Illuminate\Http\Request;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Solicitudes.create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Solicitudes.create");
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
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudes $solicitudes)
    {
        //
    }
}
