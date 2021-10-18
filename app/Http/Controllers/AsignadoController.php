<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignado;
class AsignadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignados =Asignado::all();
        return view('asignado.index')->with('asignados',$asignados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignados = new Asignado();
        $asignados->cod_asignado = $request->get('cod_asignado');
        $asignados->name_asignado = $request->get('name_asignado');

        $asignados->save();

        return redirect('/asignado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignado =Asignado::find($id);
        return view('asignado.edit')->with('asignado',$asignado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignado =Asignado::find($id);
        $asignado->cod_asignado = $request->get('cod_asignado');
        $asignado->name_asignado = $request->get('name_asignado');
        

        $asignado->save();

        return redirect('/asignado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asignado =Asignado::find($id);
        $asignado->delete();
        return redirect('/asignado');
    }
}
