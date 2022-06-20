<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\status;
use App\Models\user;
use App\Models\trip;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        //alle bookings van alle gebruikers ophalen met relaties
        $bookings = booking::with('user', 'trips', 'status')->get();
        return view('booking.index', compact('bookings'));
    }

    //get booking for the user
    public function MijnBooking()
    {
        //all bookings for the user with relation to trip and status
        $bookings = booking::with('trips', 'status', 'user')->where('Klant_id', auth()->user()->id)->get();
        return view('booking.mijnBooking', compact('bookings'));
    }

//homrebooking
    public function HomeBooking()
    {
        //count all bookings for the user with relation to trip and status
        $bookings = booking::with('trips', 'status', 'user')->where('Klant_id', auth()->user()->id)->get();
        return view('index', compact('bookings'));
    }

    public function create()
    {
        //trip_id
        $trips = trip::all();
        return view('index', compact('trips'));
    }

    public function store(Request $request)
    {
        //validate all inputs
        $this->validate($request, [
            'StartDatum' => 'required',
            'Trip_id' => 'required',
            'Klant_id' => 'required',
        ]);

        $booking = new booking();
        $booking->StartDatum = $request->StartDatum;
        $booking->Trip_id = $request->Trip_id;
        $booking->Klant_id = $request->Klant_id;
        $booking->save();

        if ($booking) {
            return back()->with('success', 'Uw booking is aangevraagd');

        } else {
            return back()->with('error', 'Uw booking is niet aangevraagd');
        }
    }


    public function show(booking $booking)
    {
        //
    }


    public function edit(booking $booking)
    {
        //edit booking with relation to trip and status
        $booking = booking::with('trips', 'status')->find($booking->id);
        return view('booking.edit', compact('booking'));
    }


    public function update(Request $request, booking $booking)
    {
        //
        $booking = booking::find($booking->id);
        $booking->StartDatum = $request->StartDatum;
        $booking->Trip_id = $request->Trip_id;
    }



    public function destroy(booking $booking)
    {
        //delete booking
        $booking->delete();

        if ($booking) {
            return back()->with('success', 'Boeking is verwijderd');

        } else {
            return back()->with('error', 'Boeking is niet verwijderd');
        }
    }
}
