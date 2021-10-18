<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CondicionesGenerales;
class CondicionesGeneralesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condicionesgenerales =CondicionesGenerales::all();
        return view('condicionesgenerales.index')->with('condicionesgenerales',$condicionesgenerales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condicionesgenerales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condicionesgenerales = new CondicionesGenerales();
        $condicionesgenerales->cod_condicionesgenerales = $request->get('cod_condicionesgenerales');
        $condicionesgenerales->name_condicionesgenerales = $request->get('name_condicionesgenerales');

        $condicionesgenerales->save();

        return redirect('/condicionesgenerales');
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
        $condicionesgenerales =CondicionesGenerales::find($id);
        return view('condicionesgenerales.edit')->with('condicionesgenerales',$condicionesgenerales);
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
        $condicionesgenerales =CondicionesGenerales::find($id);
        $condicionesgenerales->cod_condicionesgenerales = $request->get('cod_condicionesgenerales');
        $condicionesgenerales->name_condicionesgenerales = $request->get('name_condicionesgenerales');
        

        $condicionesgenerales->save();

        return redirect('/condicionesgenerales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condicionesgenerales =CondicionesGenerales::find($id);
        $condicionesgenerales->delete();
        return redirect('/condicionesgenerales');
    }
}
