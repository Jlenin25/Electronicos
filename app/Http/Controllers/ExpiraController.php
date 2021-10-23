<?php

namespace App\Http\Controllers;

use App\Models\Expira;
use Illuminate\Http\Request;

/**
 * Class ExpiraController
 * @package App\Http\Controllers
 */
class ExpiraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expiras = Expira::paginate();

        return view('expira.index', compact('expiras'))
            ->with('i', (request()->input('page', 1) - 1) * $expiras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $expira = new Expira();
        return view('expira.create', compact('expira'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Expira::$rules);

        $expira = Expira::create($request->all());

        return redirect()->route('expiras.index')
            ->with('success', 'Expira created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expira = Expira::find($id);

        return view('expira.show', compact('expira'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expira = Expira::find($id);

        return view('expira.edit', compact('expira'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expira $expira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expira $expira)
    {
        request()->validate(Expira::$rules);

        $expira->update($request->all());

        return redirect()->route('expiras.index')
            ->with('success', 'Expira updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expira = Expira::find($id)->delete();

        return redirect()->route('expiras.index')
            ->with('success', 'Expira deleted successfully');
    }
}
