<?php

namespace App\Http\Controllers;

use App\PersonasFisicas;
use Illuminate\Http\Request;

class PersonasFisicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PersonasFisicas=PersonasFisicas::orderby('id_personas_fisicas')->get();
        return view("PersonasFisicas.index",compact('PersonasFisicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("PersonasFisicas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PersonaFisica=array('ap'=>$request->ap,
            'am'=>$request->am,'nombre'=>$request->nombre);
        PersonasFisicas::create($PersonaFisica);
        return redirect("PersonasFisicas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonasFisicas  $personasFisicas
     * @return \Illuminate\Http\Response
     */
    public function show(PersonasFisicas $personasFisicas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonasFisicas  $personasFisicas
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonasFisicas $personasFisicas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonasFisicas  $personasFisicas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonasFisicas $personasFisicas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonasFisicas  $personasFisicas
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonasFisicas $personasFisicas)
    {
        //
    }
}
