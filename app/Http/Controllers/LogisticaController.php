<?php

namespace App\Http\Controllers;

use App\Models\Logistica;
use Illuminate\Http\Request;

/**
 * Class LogisticaController
 * @package App\Http\Controllers
 */
class LogisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logisticas = Logistica::paginate();

        return view('logistica.index', compact('logisticas'))
            ->with('i', (request()->input('page', 1) - 1) * $logisticas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logistica = new Logistica();
        return view('logistica.create', compact('logistica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Logistica::$rules);

        $logistica = Logistica::create($request->all());

        return redirect()->route('logisticas.index')
            ->with('success', 'Logistica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logistica = Logistica::find($id);

        return view('logistica.show', compact('logistica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logistica = Logistica::find($id);

        return view('logistica.edit', compact('logistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Logistica $logistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistica $logistica)
    {
        request()->validate(Logistica::$rules);

        $logistica->update($request->all());

        return redirect()->route('logisticas.index')
            ->with('success', 'Logistica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $logistica = Logistica::find($id)->delete();

        return redirect()->route('logisticas.index')
            ->with('success', 'Logistica deleted successfully');
    }
}
