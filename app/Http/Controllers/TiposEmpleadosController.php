<?php

namespace App\Http\Controllers;

use App\Logins;
use App\SujetosObligados;
use App\TiposEmpleados;
use Illuminate\Http\Request;

class TiposEmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TiposEmpleados=TiposEmpleados::orderby('id_tipo_empleado')->get();
        return view("TiposEmpleados.index",compact('TiposEmpleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("TiposEmpleados.create");
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
        $TiposEmpleado=array('descripcion'=>$request->descripcion);
        TiposEmpleados::create($TiposEmpleado);
        return redirect("TiposEmpleados");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TiposEmpleados  $tiposEmpleados
     * @return \Illuminate\Http\Response
     */
    public function show(TiposEmpleados $tiposEmpleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TiposEmpleados  $tiposEmpleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $TipoEmpleado=TiposEmpleados::find($id);
        return view('TiposEmpleados.edit', compact('TipoEmpleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TiposEmpleados  $tiposEmpleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposEmpleados $TiposEmpleado)
    {
        $TiposEmpleado->update($request->all());
        return redirect("TiposEmpleados");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TiposEmpleados  $tiposEmpleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TiposEmpleado=TiposEmpleados::find($id);
        $TiposEmpleado->delete();
        return redirect("TiposEmpleados");
    }
}
