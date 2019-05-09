<?php

namespace App\Http\Controllers;

use App\DatosPersonales;
use Illuminate\Http\Request;

class DatosPersonalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DatosPersonales=DatosPersonales::orderby('id_datos_personales')->get();
        return view("DatosPersonales.index",compact('DatosPersonales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("DatosPersonales.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $DatosPersonales=array('descripcion'=>$request->descripcion);
        DatosPersonales::create($DatosPersonales);
        return redirect("DatosPersonales");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosPersonales  $datosPersonales
     * @return \Illuminate\Http\Response
     */
    public function show(DatosPersonales $datosPersonales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosPersonales  $datosPersonales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $DatosPersonal=DatosPersonales::find($id);
        return view('DatosPersonales.edit', compact('DatosPersonal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosPersonales  $datosPersonales
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, DatosPersonales $DatosPersonal)
    {
        //
        $DatosPersonal->update($request->all());
        return redirect("DatosPersonales");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosPersonales  $datosPersonales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DatosPersonal=DatosPersonales::find($id);
        $DatosPersonal->delete();

        return redirect("DatosPersonales");
    }
}
