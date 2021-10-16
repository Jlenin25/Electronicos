<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistica;
class LogisticaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:logistica.index')->only('index');
        $this->middleware('can:logistica.create')->only('create', 'store');
        $this->middleware('can:logistica.edit')->only('edit', 'update');
        $this->middleware('can:logistica.destroy')->only('destroy');
    }
    public function index()
    {
        $logisticas =Logistica::all();
        return view('logistica.index')->with('logisticas',$logisticas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logistica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logisticas = new Logistica();
        $logisticas->id_log = $request->get('id_log');
        $logisticas->id_emp = $request->get('id_emp');
        $logisticas->id_estado = $request->get('id_estado');

        $logisticas->save();

        return redirect('/logistica');
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
        $logistica =Logistica::find($id);
        return view('logistica.edit')->with('logistica',$logistica);
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
        $logistica =Logistica::find($id);
        $logistica->id_log = $request->get('id_log');
        $logistica->id_emp = $request->get('id_emp');
        $logistica->id_estado = $request->get('id_estado');

        $logistica->save();

        return redirect('/logistica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logistica =Logistica::find($id);
        $logistica->delete();
        return redirect('/logistica');
    }
}
