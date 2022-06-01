<?php

namespace App\Http\Controllers;

use App\Models\trip;
use Illuminate\Http\Request;



class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $trips = trip::all();
        return view('trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //
        return view('Trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {

        $trip = new trip();
        $trip->Omschrijving = $request->input('Omschrijving');
        $trip->Route = $request->input('Route');
        $trip->AantalDagen = $request->input('AantalDagen');
        $trip->save();

        if ($trip) {
            return back()->with('succes', 'Trip is succesvol aangemaakt');
        } else {
            return back()->with('error', 'Trip is niet aangemaakt');
        }
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(trip $trip)
    {
        //
    }
}
