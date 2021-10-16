<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;
class IncidenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:incidencias.index')->only('index');
        $this->middleware('can:incidencias.create')->only('create', 'store');
        $this->middleware('can:incidencias.edit')->only('edit', 'update');
        $this->middleware('can:incidencias.destroy')->only('destroy');
    }
    public function index()
    {
        $incidencias =Incidencia::all();
        return view('incidencia.index')->with('incidencias',$incidencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidencias = new Incidencia();
        $incidencias->id_inci = $request->get('id_inci');
        $incidencias->nombre = $request->get('nombre');
        $incidencias->tipo = $request->get('tipo');
        $incidencias->categoria = $request->get('categoria');
        $incidencias->id_emp = $request->get('id_emp');
        $incidencias->id_clie = $request->get('id_clie');
        $incidencias->id_prov = $request->get('id_prov');
        $incidencias->id_estado = $request->get('id_estado');

        $incidencias->save();

        return redirect('/incidencia');
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
        $incidencia =Incidencia::find($id);
        return view('incidencia.edit')->with('incidencia',$incidencia);
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
        $incidencia =Incidencia::find($id);
        $incidencia->id_inci = $request->get('id_inci');
        $incidencia->nombre = $request->get('nombre');
        $incidencia->tipo = $request->get('tipo');
        $incidencia->categoria = $request->get('categoria');
        $incidencia->id_emp = $request->get('id_emp');
        $incidencia->id_clie = $request->get('id_clie');
        $incidencia->id_prov = $request->get('id_prov');
        $incidencia->id_estado = $request->get('id_estado');

        $incidencia->save();

        return redirect('/incidencia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidencia =Incidencia::find($id);
        $incidencia->delete();
        return redirect('/incidencia');
    }
}
