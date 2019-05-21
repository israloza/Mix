<?php

namespace App\Http\Controllers;

use App\Logins;
use App\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Personas=Personas::orderby('id_persona')->get();
        return view("Personas.index",compact('Personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Personas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Persona=array('nombre'=>$request->nombre,
            'ap'=>$request->ap,'am'=>$request->am);
        Logins::create($Persona);
        return redirect("Personas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Persona=Logins::find($id);
        return view('Personas.edit', compact('Persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas)
    {
        $personas->update($request->all());
        return redirect("Personas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Persona=Logins::find($id);
        $Persona->delete();
        return redirect("Personas");
    }
}
