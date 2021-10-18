<?php

namespace App\Http\Controllers;

use App\Models\Piepagina;
use Illuminate\Http\Request;

/**
 * Class PiepaginaController
 * @package App\Http\Controllers
 */
class PiepaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piepaginas = Piepagina::paginate();

        return view('piepagina.index', compact('piepaginas'))
            ->with('i', (request()->input('page', 1) - 1) * $piepaginas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piepagina = new Piepagina();
        return view('piepagina.create', compact('piepagina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Piepagina::$rules);

        $piepagina = Piepagina::create($request->all());

        return redirect()->route('piepaginas.index')
            ->with('success', 'Piepagina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $piepagina = Piepagina::find($id);

        return view('piepagina.show', compact('piepagina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $piepagina = Piepagina::find($id);

        return view('piepagina.edit', compact('piepagina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Piepagina $piepagina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piepagina $piepagina)
    {
        request()->validate(Piepagina::$rules);

        $piepagina->update($request->all());

        return redirect()->route('piepaginas.index')
            ->with('success', 'Piepagina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $piepagina = Piepagina::find($id)->delete();

        return redirect()->route('piepaginas.index')
            ->with('success', 'Piepagina deleted successfully');
    }
}
