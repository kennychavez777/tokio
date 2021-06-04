<?php

namespace App\Http\Controllers;

use App\SedeModel;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = SedeModel::all();
        
        return view('sede.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sede.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede = new SedeModel;
        $sede->nombre = $request->nombre;
        $sede->ubicacion = $request->ubicacion;
        $sede->no_complejos = $request->no_complejos;
        $sede->prespuesto = $request->prespuesto;
        $sede->save();    
     
        return redirect()->route('sede.index')->with('success', 'Sede creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SedeModel  $sedeModel
     * @return \Illuminate\Http\Response
     */
    public function show(SedeModel $sedeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SedeModel  $sedeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SedeModel $sede)
    {
        $sede = $sede->getOriginal();
        
        return view('sede.edit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SedeModel  $sedeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SedeModel $sede)
    {
        //$sede = SedeModel::find($sede->getOriginal()['ID_SEDE_OLIMPICA']);
        $sede->nombre = $request->nombre;
        $sede->ubicacion = $request->ubicacion;
        $sede->no_complejos = $request->no_complejos;
        $sede->prespuesto = $request->prespuesto;
        $sede->save();
        
        return redirect()->route('sede.index')->with('success', 'Sede editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SedeModel  $sedeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SedeModel $sede)
    {
        $sede->delete();

        return redirect()->route('sede.index')->with('success', 'Sede eliminada correctamente');
    }
}
