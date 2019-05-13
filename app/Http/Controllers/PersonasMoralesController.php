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


    public function edit($id)
    {
        //
        $PersonasMoral=PersonasMorales::find($id);
        return view('PersonasMorales.edit', compact('PersonasMoral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonasMorales $PersonasMorale)
    {

        $PersonasMorale->update($request->all());
        return redirect("PersonasMorales");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonasMorales  $personasMorales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $PersonasMoral=PersonasMorales::find($id);
        $PersonasMoral->delete();

        return redirect("PersonasMorales");


    }
}
