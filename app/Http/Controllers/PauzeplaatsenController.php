<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\status;
use App\Models\Pauzeplaatsen;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class PauzeplaatsenController extends Controller
{

    public function index()
    {
        //
        $pauzeplaatsenn = Pauzeplaatsen::with('booking', 'restaurant', 'status')->get();
        return view('pauzeplaats.index', compact('pauzeplaatsenn'));
    }


    public function create()
    {
        //
        $bookings = Booking::all();
        $restaurants = Restaurant::all();
        $statuses = Status::all();
        return view('pauzeplaats.create', compact('bookings', 'restaurants', 'statuses'));
    }


    public function store(Request $request)
    {

        $pauzeplaats = new Pauzeplaatsen();
        $pauzeplaats->booking_id = $request->booking_id;
        $pauzeplaats->restaurant_id = $request->restaurant_id;
        $pauzeplaats->status_id = $request->status_id;

        $pauzeplaats->save();

        if ($pauzeplaats) {
            return redirect('/pauzeplaatsen')->with('success', 'Uw pauzeplaats is aangevraagd');

        } else {
            return redirect('/pauzeplaatsen')->wit('error', 'Uw pauzeplaats is niet aangevraagd');
        }

    }


    public function show(Pauzeplaatsen $pauzeplaatsen)
    {
        //
    }


    public function edit(Pauzeplaatsen $pauzeplaatsen)
    {
        //
        $bookings = Booking::all();
        $restaurants = Restaurant::all();
        $statuses = Status::all();
        return view('pauzeplaats.edit', compact('pauzeplaatsen', 'bookings', 'restaurants', 'statuses'));
    }


    public function update(Request $request, Pauzeplaatsen $pauzeplaatsen)
    {
        //
        $this->validate($request, [
            'booking_id' => 'required',
            'restaurant_id' => 'required',
            'status_id' => 'required',
        ]);
        $pauzeplaatsen->booking_id = $request->booking_id;
        $pauzeplaatsen->restaurant_id = $request->restaurant_id;
        $pauzeplaatsen->status_id = $request->status_id;
        $pauzeplaatsen->save();

        if ($pauzeplaatsen) {
            return redirect('/pauzeplaatsen')->with('success', 'Uw pauzeplaats is aangevraagd');

        } else {
            return redirect('/pauzeplaatsen')->wit('error', 'Uw pauzeplaats is niet aangevraagd');
        }
    }



    public function destroy(Pauzeplaatsen $pauzeplaatsen)
    {

        //$pauzeplaatsen=Pauzeplaatsen::find($pauzeplaatsen->id);

        if ($pauzeplaatsen->status->Status == 'Definitief') {
            return redirect('/pauzeplaatsen')->with('error', 'Deze pauzeplaats is definitief en kan niet verwijderd worden');
        } else {
            $pauzeplaatsen->delete();
            return redirect('/pauzeplaatsen')->with('success', 'De pauzeplaats is verwijderd');
        }


    }
}
