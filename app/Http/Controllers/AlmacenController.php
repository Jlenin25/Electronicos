<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Almacen;
class AlmacenController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:almacen.index')->only('index');
        $this->middleware('can:almacen.create')->only('create', 'store');
        $this->middleware('can:almacen.edit')->only('edit', 'update');
        $this->middleware('can:almacen.destroy')->only('destroy');
    }
    public function index()
    {
        $almacens =Almacen::all();
        return view('almacen.index')->with('almacens',$almacens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacens = new Almacen();
        $almacens->codigo = $request->get('codigo');
        $almacens->producto = $request->get('producto');
        $almacens->imagen = $request->get('imagen');
        $almacens->descripcion = $request->get('descripcion');
        $almacens->stock_minimo = $request->get('stock_minimo');
        $almacens->stock_maximo = $request->get('stock_maximo');

        $almacens->save();

        return redirect('/almacen');
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
        $almacen =Almacen::find($id);
        return view('almacen.edit')->with('almacen',$almacen);
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
        $almacen =Almacen::find($id);
        $almacen->codigo = $request->get('codigo');
        $almacen->producto = $request->get('producto');
        $almacen->imagen = $request->get('imagen');
        $almacen->descripcion = $request->get('descripcion');
        $almacen->stock_minimo = $request->get('stock_minimo');
        $almacen->stock_maximo = $request->get('stock_maximo');

        $almacen->save();

        return redirect('/almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacen =Almacen::find($id);
        $almacen->delete();
        return redirect('/almacen');
    }
}
