<?php

namespace App\Http\Controllers;

use App\Models\Condicion;
use Illuminate\Http\Request;

/**
 * Class CondicionController
 * @package App\Http\Controllers
 */
class CondicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condicions = Condicion::paginate();

        return view('condicion.index', compact('condicions'))
            ->with('i', (request()->input('page', 1) - 1) * $condicions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condicion = new Condicion();
        return view('condicion.create', compact('condicion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Condicion::$rules);

        $condicion = Condicion::create($request->all());

        return redirect()->route('condicions.index')
            ->with('success', 'Condicion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condicion = Condicion::find($id);

        return view('condicion.show', compact('condicion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condicion = Condicion::find($id);

        return view('condicion.edit', compact('condicion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Condicion $condicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condicion $condicion)
    {
        request()->validate(Condicion::$rules);

        $condicion->update($request->all());

        return redirect()->route('condicions.index')
            ->with('success', 'Condicion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $condicion = Condicion::find($id)->delete();

        return redirect()->route('condicions.index')
            ->with('success', 'Condicion deleted successfully');
    }
}
