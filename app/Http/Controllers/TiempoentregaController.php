<?php

namespace App\Http\Controllers;

use App\Models\Tiempoentrega;
use Illuminate\Http\Request;

/**
 * Class TiempoentregaController
 * @package App\Http\Controllers
 */
class TiempoentregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiempoentregas = Tiempoentrega::paginate();

        return view('tiempoentrega.index', compact('tiempoentregas'))
            ->with('i', (request()->input('page', 1) - 1) * $tiempoentregas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tiempoentrega = new Tiempoentrega();
        return view('tiempoentrega.create', compact('tiempoentrega'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiempoentrega::$rules);

        $tiempoentrega = Tiempoentrega::create($request->all());

        return redirect()->route('tiempoentregas.index')
            ->with('success', 'Tiempoentrega created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiempoentrega = Tiempoentrega::find($id);

        return view('tiempoentrega.show', compact('tiempoentrega'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiempoentrega = Tiempoentrega::find($id);

        return view('tiempoentrega.edit', compact('tiempoentrega'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiempoentrega $tiempoentrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiempoentrega $tiempoentrega)
    {
        request()->validate(Tiempoentrega::$rules);

        $tiempoentrega->update($request->all());

        return redirect()->route('tiempoentregas.index')
            ->with('success', 'Tiempoentrega updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiempoentrega = Tiempoentrega::find($id)->delete();

        return redirect()->route('tiempoentregas.index')
            ->with('success', 'Tiempoentrega deleted successfully');
    }
}
