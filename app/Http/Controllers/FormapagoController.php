<?php

namespace App\Http\Controllers;

use App\Models\Formapago;
use Illuminate\Http\Request;

/**
 * Class FormapagoController
 * @package App\Http\Controllers
 */
class FormapagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $formapagos = Formapago::paginate();

        return view('formapago.index', compact('formapagos'))
            ->with('i', (request()->input('page', 1) - 1) * $formapagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formapago = new Formapago();
        return view('formapago.create', compact('formapago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Formapago::$rules);

        $formapago = Formapago::create($request->all());

        return redirect()->route('formapagos.index')
            ->with('success', 'Formapago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formapago = Formapago::find($id);

        return view('formapago.show', compact('formapago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formapago = Formapago::find($id);

        return view('formapago.edit', compact('formapago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Formapago $formapago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formapago $formapago)
    {
        request()->validate(Formapago::$rules);

        $formapago->update($request->all());

        return redirect()->route('formapagos.index')
            ->with('success', 'Formapago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formapago = Formapago::find($id)->delete();

        return redirect()->route('formapagos.index')
            ->with('success', 'Formapago deleted successfully');
    }
}
