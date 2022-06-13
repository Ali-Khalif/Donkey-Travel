<?php

namespace App\Http\Controllers;

use App\Models\Overnachtingen;
use App\Http\Requests\StoreOvernachtingenRequest;
use App\Http\Requests\UpdateOvernachtingenRequest;

class OvernachtingenController extends Controller
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
     * @param  \App\Http\Requests\StoreOvernachtingenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOvernachtingenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Overnachtingen  $overnachtingen
     * @return \Illuminate\Http\Response
     */
    public function show(Overnachtingen $overnachtingen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Overnachtingen  $overnachtingen
     * @return \Illuminate\Http\Response
     */
    public function edit(Overnachtingen $overnachtingen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOvernachtingenRequest  $request
     * @param  \App\Models\Overnachtingen  $overnachtingen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOvernachtingenRequest $request, Overnachtingen $overnachtingen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Overnachtingen  $overnachtingen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overnachtingen $overnachtingen)
    {
        //
    }
}
