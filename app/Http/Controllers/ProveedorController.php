<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:proveedores.index')->only('index');
        $this->middleware('can:proveedores.create')->only('create', 'store');
        $this->middleware('can:proveedores.edit')->only('edit', 'update');
        $this->middleware('can:proveedores.destroy')->only('destroy');
    }
    public function index()
    {
        $proveedors =Proveedor::all();
        return view('proveedor.index')->with('proveedors',$proveedors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedors = new Proveedor();
        $proveedors->codigo = $request->get('codigo');
        $proveedors->razon_social = $request->get('razon_social');
        $proveedors->ruc = $request->get('ruc');
        $proveedors->dni = $request->get('dni');
        $proveedors->nombre_prov = $request->get('nombre_prov');
        $proveedors->apellido_prov = $request->get('apellido_prov');
        $proveedors->imagen = $request->get('imagen');
        $proveedors->direccion_prov = $request->get('direccion_prov');
        $proveedors->celular = $request->get('celular');

        $proveedors->save();

        return redirect('/proveedor');
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
        $proveedor =Proveedor::find($id);
        return view('proveedor.edit')->with('proveedor',$proveedor);
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
        $proveedor =Proveedor::find($id);
        $proveedor->codigo = $request->get('codigo');
        $proveedor->razon_social = $request->get('razon_social');
        $proveedor->ruc = $request->get('ruc');
        $proveedor->dni = $request->get('dni');
        $proveedor->nombre_prov = $request->get('nombre_prov');
        $proveedor->apellido_prov = $request->get('apellido_prov');
        $proveedor->imagen = $request->get('imagen');
        $proveedor->direccion_prov = $request->get('direccion_prov');
        $proveedor->celular = $request->get('celular');

        $proveedor->save();

        return redirect('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor =Proveedor::find($id);
        $proveedor->delete();
        return redirect('/proveedor');
    }
}
