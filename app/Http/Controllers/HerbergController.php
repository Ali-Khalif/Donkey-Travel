<?php

namespace App\Http\Controllers;

use App\Models\Herberg;
use App\Http\Requests\StoreHerbergRequest;
use App\Http\Requests\UpdateHerbergRequest;

class HerbergController extends Controller
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
     * @param  \App\Http\Requests\StoreHerbergRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHerbergRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herberg  $herberg
     * @return \Illuminate\Http\Response
     */
    public function show(Herberg $herberg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herberg  $herberg
     * @return \Illuminate\Http\Response
     */
    public function edit(Herberg $herberg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHerbergRequest  $request
     * @param  \App\Models\Herberg  $herberg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHerbergRequest $request, Herberg $herberg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herberg  $herberg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herberg $herberg)
    {
        //
    }
}
