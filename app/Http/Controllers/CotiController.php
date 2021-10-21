<?php

namespace App\Http\Controllers;
use App\Models\Coti;
use App\Models\Asignado;
use App\Models\Moneda;
use App\Models\Tiempoentrega;
use App\Models\Formapago;
use App\Models\Estado;
use App\Models\Expira;
use Illuminate\Http\Request;

/**
 * Class CotiController
 * @package App\Http\Controllers
 */
class CotiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotis = Coti::paginate();

        return view('coti.index', compact('cotis'))
            ->with('i', (request()->input('page', 1) - 1) * $cotis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $asignado = Asignado::all();
        $moneda = Moneda::all();
        $tiempoentrega = Tiempoentrega::all();
        $pago = Formapago::all();
        $estado = Estado::all();
        $expira = Expira::all();
        $coti = new Coti();
        return view('coti.create', compact(
            'coti', 'asignado',
            'moneda', 'tiempoentrega',
            'pago', 'estado',
            'expira'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coti::$rules);

        $coti = Coti::create($request->all());

        return redirect()->route('cotis.index')
            ->with('success', 'Coti created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coti = Coti::find($id);

        return view('coti.show', compact('coti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coti = Coti::find($id);

        return view('coti.edit', compact('coti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coti $coti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coti $coti)
    {
        request()->validate(Coti::$rules);

        $coti->update($request->all());

        return redirect()->route('cotis.index')
            ->with('success', 'Coti updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coti = Coti::find($id)->delete();

        return redirect()->route('cotis.index')
            ->with('success', 'Coti deleted successfully');
    }
}
