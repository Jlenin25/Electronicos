<?php

namespace App\Http\Controllers;

use App\Models\Asignado;
use Illuminate\Http\Request;

/**
 * Class AsignadoController
 * @package App\Http\Controllers
 */
class AsignadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignados = Asignado::paginate();

        return view('asignado.index', compact('asignados'))
            ->with('i', (request()->input('page', 1) - 1) * $asignados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asignado = new Asignado();
        return view('asignado.create', compact('asignado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Asignado::$rules);

        $asignado = Asignado::create($request->all());

        return redirect()->route('asignados.index')
            ->with('success', 'Asignado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignado = Asignado::find($id);

        return view('asignado.show', compact('asignado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignado = Asignado::find($id);

        return view('asignado.edit', compact('asignado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Asignado $asignado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignado $asignado)
    {
        request()->validate(Asignado::$rules);

        $asignado->update($request->all());

        return redirect()->route('asignados.index')
            ->with('success', 'Asignado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $asignado = Asignado::find($id)->delete();

        return redirect()->route('asignados.index')
            ->with('success', 'Asignado deleted successfully');
    }
}
