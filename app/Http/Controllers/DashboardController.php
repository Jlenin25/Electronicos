<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard.index')->only('index');
        $this->middleware('can:dashboard.create')->only('create', 'store');
        $this->middleware('can:dashboard.edit')->only('edit', 'update');
        $this->middleware('can:dashboard.destroy')->only('destroy');
    }
    public function index()
    {
        $dashboards =Dashboard::all();
        return view('dashboard.index')->with('dashboards',$dashboards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dashboard = new Dashboard();
        $dashboard->id_das = $request->get('id_das');


        $dashboard->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dashboard =Dashboard::find($id);
        return view('dashboard.edit')->with('dashboard',$dashboard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dashboard =Dashboard::find($id);
        $dashboard->id_das = $request->get('id_das');

        $dashboard->save();

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dashboard =Dashboard::find($id);
        $dashboard->delete();
        return redirect('/dashboard');
    }
}
