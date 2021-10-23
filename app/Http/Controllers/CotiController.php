<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\User;
use App\Models\Moneda;
use App\Models\Expira;
use App\Models\Estado;
use App\Models\Formapago;
use App\Models\Tiempoentrega;
use App\Models\Condicion;
use App\Models\Piepagina;
use App\Models\Coti;
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
    public function create()
    {
        $coti = new Coti();
        $cliente = Cliente::pluck('id_user', 'id');
        $asignado = User::pluck('name', 'id');
        $moneda = Moneda::pluck('monedas', 'id');
        $expira = Expira::pluck('dias', 'id');
        $estado = Estado::pluck('situacion', 'id');
        $pago = Formapago::pluck('pago', 'id');
        $entrega = Tiempoentrega::pluck('dias', 'id');
        $condicion = Condicion::pluck('condicionesgenerales', 'id');
        $pagina = Piepagina::pluck('piedepagina', 'id');
        return view('coti.create', compact(
            'cliente', 'asignado', 'moneda',
            'expira', 'estado', 'pago', 'entrega',
            'condicion', 'pagina','coti'
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
