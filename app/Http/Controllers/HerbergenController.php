<?php

namespace App\Http\Controllers;

use App\Models\Herbergen;
use App\Http\Requests\StoreHerbergenRequest;
use App\Http\Requests\UpdateHerbergenRequest;

class HerbergenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreHerbergenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHerbergenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herbergen  $herbergen
     * @return \Illuminate\Http\Response
     */
    public function show(Herbergen $herbergen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herbergen  $herbergen
     * @return \Illuminate\Http\Response
     */
    public function edit(Herbergen $herbergen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHerbergenRequest  $request
     * @param  \App\Models\Herbergen  $herbergen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHerbergenRequest $request, Herbergen $herbergen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herbergen  $herbergen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herbergen $herbergen)
    {
        //
    }
}
