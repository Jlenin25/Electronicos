<?php

namespace App\Http\Controllers;

use App\Models\Estadocliente;
use Illuminate\Http\Request;

/**
 * Class EstadoclienteController
 * @package App\Http\Controllers
 */
class EstadoclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoclientes = Estadocliente::paginate();

        return view('estadocliente.index', compact('estadoclientes'))
            ->with('i', (request()->input('page', 1) - 1) * $estadoclientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadocliente = new Estadocliente();
        return view('estadocliente.create', compact('estadocliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadocliente::$rules);

        $estadocliente = Estadocliente::create($request->all());

        return redirect()->route('estadoclientes.index')
            ->with('success', 'Estadocliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadocliente = Estadocliente::find($id);

        return view('estadocliente.show', compact('estadocliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadocliente = Estadocliente::find($id);

        return view('estadocliente.edit', compact('estadocliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadocliente $estadocliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadocliente $estadocliente)
    {
        request()->validate(Estadocliente::$rules);

        $estadocliente->update($request->all());

        return redirect()->route('estadoclientes.index')
            ->with('success', 'Estadocliente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadocliente = Estadocliente::find($id)->delete();

        return redirect()->route('estadoclientes.index')
            ->with('success', 'Estadocliente deleted successfully');
    }
}
