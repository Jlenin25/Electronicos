<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

/**
 * Class AlmacenController
 * @package App\Http\Controllers
 */
class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacens = Almacen::paginate();

        return view('almacen.index', compact('almacens'))
            ->with('i', (request()->input('page', 1) - 1) * $almacens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almacen = new Almacen();
        return view('almacen.create', compact('almacen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Almacen::$rules);

        $almacen = Almacen::create($request->all());

        return redirect()->route('almacens.index')
            ->with('success', 'Almacen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $almacen = Almacen::find($id);

        return view('almacen.show', compact('almacen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almacen = Almacen::find($id);

        return view('almacen.edit', compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Almacen $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Almacen $almacen)
    {
        request()->validate(Almacen::$rules);

        $almacen->update($request->all());

        return redirect()->route('almacens.index')
            ->with('success', 'Almacen updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $almacen = Almacen::find($id)->delete();

        return redirect()->route('almacens.index')
            ->with('success', 'Almacen deleted successfully');
    }
}
