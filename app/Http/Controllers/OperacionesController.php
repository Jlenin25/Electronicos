<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operaciones;
class OperacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:operaciones.index')->only('index');
        $this->middleware('can:operaciones.create')->only('create', 'store');
        $this->middleware('can:operaciones.edit')->only('edit', 'update');
        $this->middleware('can:operaciones.destroy')->only('destroy');
    }
    public function index()
    {
        $operaciones =Operaciones::all();
        return view('operaciones.index')->with('operaciones',$operaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operaciones = new Operaciones();
        $operaciones->id_oper = $request->get('id_oper');
        $operaciones->id_emp = $request->get('id_emp');
        $operaciones->id_estado = $request->get('id_estado');

        $operaciones->save();

        return redirect('/operaciones');
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
        $operacion =Operaciones::find($id);
        return view('operaciones.edit')->with('operacion',$operacion);
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
        $operacion =Operaciones::find($id);
        $operacion->id_oper = $request->get('id_oper');
        $operacion->id_emp = $request->get('id_emp');
        $operacion->id_estado = $request->get('id_estado');

        $operacion->save();

        return redirect('/operaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operacion =Operaciones::find($id);
        $operacion->delete();
        return redirect('/operaciones');
    }
}
