<?php

namespace App\Http\Controllers;

use App\Models\trip;
use Illuminate\Http\Request;


class TripController extends Controller
{
    //search trip
    public function search(Request $request)
    {
        $trips = trip::where('Route', 'LIKE', '%' . $request->input('search') . '%')
            ->orWhere('Omschrijving', 'LIKE', '%' . $request->input('search') . '%')
            ->orWhere('AantalDagen', 'LIKE', '%' . $request->input('search') . '%')
            ->paginate(10);
        return view('trips.index', compact('trips'));
    }

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
        $this->validate($request, [
            'Route' => 'required',
            'Omschrijving' => 'required',
            'AantalDagen' => 'required',
        ]);

        $trip = new trip();
        $trip->Omschrijving = $request->input('Omschrijving');
        $trip->Route = $request->input('Route');
        $trip->AantalDagen = $request->input('AantalDagen');
        $trip->save();

        if ($trip) {
            return redirect('/trips')->with('succes', 'Tocht is met succes toegevoegd');

        } else {
            return redirect('/trips')->with('error', 'Tocht niet aangemaakt');

        }
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(trip $trip)
    {
        //show a specific trip
        return view('Trips.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(trip $trip)
    {
        return view('trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $trip)
    {
        //
        $request->validate([
            'Omschrijving' => 'required',
            'Route' => 'required',
            'AantalDagen' => 'required',
        ]);

        $trip = trip::find($trip);
        $trip->Omschrijving = $request->input('Omschrijving');
        $trip->Route = $request->input('Route');
        $trip->AantalDagen = $request->input('AantalDagen');
        $trip->save();

        if ($trip) {
            return redirect('/trips')->with('succes', 'Tocht is met succesvol aangepast');
        } else {
            return redirect('/trips')->with('error', 'Tocht is niet aangepast');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(trip $trip)
    {
        //destroy trip by id
        $trip->delete();
        if ($trip) {
            return redirect('/trips')->with('succes', 'Tocht is met succesvol verwijderd');
        } else {
            return back()->with('error', 'Verwijderen van trip is mislukt');
        }

    }
}
