<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Herbergen;
use App\Models\Overnachtingen;
use App\Models\status;
use Illuminate\Http\Request;


class OvernachtingenController extends Controller
{
    //search for the overnachtingen
    public function search(Request $request)
    {
        //search field
        // $trips = trip::where('Route', 'LIKE', '%' . $request->input('search') . '%')
        //            ->orWhere('Omschrijving', 'LIKE', '%' . $request->input('search') . '%')
        //            ->orWhere('AantalDagen', 'LIKE', '%' . $request->input('search') . '%')
        //            ->paginate(10);
        //        return view('trips.index', compact('trips'));
        //overnachtingen with relation to status restaurant and booking
        $overnachtingen = Overnachtingen::with('status', 'booking', 'restaurant')
            //booking id in the booking table and get booking name
            ->whereHas('booking', function ($query) {
                $query->where('Klant_id', auth()->user()->id);
            });

        return view('overnachtingen.index', compact('overnachtingen'));
    }

    public function index()
    {
        //
        $statussen = status::all();
        $overnachtingens = Overnachtingen::with('booking', 'herberg', 'status')->get();
        return view('overnachtingplaats.index', compact('overnachtingens', 'statussen'));
    }


    public function create()
    {
        //
        $bookings = booking::all();
        $herbergs = Herbergen::all();
        $statuses = status::all();
        return view('overnachtingplaats.create', compact('herbergs', 'bookings', 'statuses'));
    }


    public function store(Request $request)
    {
        //

        $overnachting = new Overnachtingen();
        $overnachting->Herberg_id = $request->Herberg_id;
        $overnachting->Booking_id = $request->Booking_id;
        $overnachting->Status_id = $request->Status_id;
        $overnachting->save();

        if ($overnachting) {
            return redirect('/overnachtingen')->with('success', 'Uw overnachting is aangevraagd');

        } else {
            return redirect('/overnachtingen')->wit('error', 'Uw overnachting is niet aangevraagd');
        }

    }

    public function show(Overnachtingen $overnachtingen)
    {
        //
    }

    //
    public function edit(Overnachtingen $overnachtingen)
    {
        $bookings = booking::all();
        $herbergs = Herbergen::all();
        $statuses = status::all();
        return view('overnachtingplaats.edit', compact('overnachtingen', 'herbergs', 'bookings', 'statuses'));
    }

    //
    public function update(Request $request, Overnachtingen $overnachtingen)
    {
        //
        $overnachtingen->Herberg_id = $request->Herberg_id;
        $overnachtingen->Booking_id = $request->Booking_id;
        $overnachtingen->Status_id = $request->Status_id;
        $overnachtingen->save();

        if ($overnachtingen) {
            return redirect('/overnachtingen')->with('success', 'Uw overnachting is aangepast');

        } else {
            return redirect('/overnachtingen')->wit('error', 'Uw overnachting is niet aangepast');
        }
    }

    public function destroy(Overnachtingen $overnachtingen)
    {

        $overnachtingen=Overnachtingen::find($overnachtingen->id);

        if ($overnachtingen->status->Status == 'Definitief') {
            return redirect('/overnachtingen')->with('error', 'Deze overnachting is definitief en kan niet verwijderd worden');
        } else {
            $overnachtingen->delete();
            return redirect('/overnachtingen')->with('success', 'De overnachting is verwijderd');
        }


    }


}
