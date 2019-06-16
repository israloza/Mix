<?php

namespace App\Http\Controllers;

use App\DocumentosOriginales;
use Illuminate\Http\Request;

class DocumentosOriginalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*$DocumentosOriginales=DocumentosOriginales::orderby('id_documentos_originales')->get();
        return view("DocumentosOriginales.index",compact('DocumentosOriginales'));*/

        return view("DocumentosOriginales.index");
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
        $request->validate([
            "cargar" => "required|mimes:pdf|max:10000"

        ]);



        $cargar = $request->file('cargar');

        //obtenemos el nombre del archivo
        $nombre = $cargar->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($cargar));

        return "archivo guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DocumentosOriginales  $documentosOriginales
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentosOriginales $documentosOriginales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DocumentosOriginales  $documentosOriginales
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentosOriginales $documentosOriginales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DocumentosOriginales  $documentosOriginales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentosOriginales $documentosOriginales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DocumentosOriginales  $documentosOriginales
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentosOriginales $documentosOriginales)
    {
        //
    }
}
