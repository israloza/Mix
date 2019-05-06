<?php

namespace App\Http\Controllers;

use App\PersonasMorales;
use Illuminate\Http\Request;

class PersonasMoralesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PersonasMorales=PersonasMorales::orderby('id_personas_morales')->get();
        return view("PersonasMorales.index",compact('PersonasMorales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("PersonasMorales.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $PersonaMoral=array('razon_den_social'=>$request->razon_den_social,'ap_rep'=>$request->ap_rep,
            'am_rep'=>$request->am_rep,'nom_rep'=>$request->nom_rep);
        PersonasMorales::create($PersonaMoral);
        return redirect("PersonasMorales");


        $PersonaMoral=array('razon_den_social'=>$request->razon_den_social,
            'ap_rep'=>$request->ap_rep,'am_rep'=>$request->am_rep,'nom_rep'=>$request->nom_rep);
        PersonasMorales::create($PersonaMoral);
        return redirect("PersonasMorales");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function show(PersonasMorales $personasMorales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonasMorales $personasMorales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonasMorales $personasMorales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonasMorales $personasMorales)
    {
        //
    }
}
