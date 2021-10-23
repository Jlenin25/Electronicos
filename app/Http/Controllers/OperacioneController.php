<?php

namespace App\Http\Controllers;

use App\Models\Operacione;
use Illuminate\Http\Request;

/**
 * Class OperacioneController
 * @package App\Http\Controllers
 */
class OperacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operaciones = Operacione::paginate();

        return view('operacione.index', compact('operaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $operaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operacione = new Operacione();
        return view('operacione.create', compact('operacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Operacione::$rules);

        $operacione = Operacione::create($request->all());

        return redirect()->route('operaciones.index')
            ->with('success', 'Operacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operacione = Operacione::find($id);

        return view('operacione.show', compact('operacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operacione = Operacione::find($id);

        return view('operacione.edit', compact('operacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Operacione $operacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operacione $operacione)
    {
        request()->validate(Operacione::$rules);

        $operacione->update($request->all());

        return redirect()->route('operaciones.index')
            ->with('success', 'Operacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $operacione = Operacione::find($id)->delete();

        return redirect()->route('operaciones.index')
            ->with('success', 'Operacione deleted successfully');
    }
}
