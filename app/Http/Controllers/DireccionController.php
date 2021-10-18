<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;
class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direccions =Direccion::all();
        return view('direccion.index')->with('direccions',$direccions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direccion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccions = new Direccion();
        $direccions->cod_direccion = $request->get('cod_direccion');
        $direccions->name_direccion = $request->get('name_direccion');

        $direccions->save();

        return redirect('/direccion');
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
        $direccion =Direccion::find($id);
        return view('direccion.edit')->with('direccion',$direccion);
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
        $direccion =Direccion::find($id);
        $direccion->cod_direccion = $request->get('cod_direccion');
        $direccion->name_direccion = $request->get('name_direccion');
        

        $direccion->save();

        return redirect('/direccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direccion =Direccion::find($id);
        $direccion->delete();
        return redirect('/direccion');
    }
}
