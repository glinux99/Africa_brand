<?php

namespace App\Http\Controllers;

use App\Models\Impot;
use Illuminate\Http\Request;

class ImpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impots = Impot::paginate(10);
        return view('taxes.taxe', ['impots' => $impots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Impot::create(['name' => $request->name]);
        return ImpotController::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Impot  $impot
     * @return \Illuminate\Http\Response
     */
    public function show(Impot $impot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Impot  $impot
     * @return \Illuminate\Http\Response
     */
    public function edit(Impot $impot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Impot  $impot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impot $impot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Impot  $impot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impot $impot)
    {
        $impot->delete();
        return ImpotController::index();
    }
}
