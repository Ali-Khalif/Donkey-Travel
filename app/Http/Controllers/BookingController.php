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
        //
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


    public function create()
    {
        $statuses = status::all();
        $trips = trip::all();
        return view('index', compact('trips', 'statuses'));
    }

    public function store(Request $request)
    {
        //validate all inputs
        $this->validate($request, [
            'StartDatum' => 'required',
            'status_id' => 'required',
            'Trip_id' => 'required',
            'Klant_id' => 'required',
        ]);

        $booking = new booking();
        $booking->StartDatum = $request->StartDatum;
        $booking->Status_id = $request->status_id;
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

    //hier word de boeking gegevens opgehaald in en de edit form weergegeven
    public function edit(booking $booking)
    {
        //
        $statuses = status::all();
        $trips = trip::all();
        $booking = booking::with('trips', 'status')->find($booking->id);
        return view('booking.edit', compact('booking', 'trips', 'statuses'));
    }


    public function update(Request $request, booking $booking)
    {
        //
        $this->validate($request, [
            'StartDatum' => 'required',
            'Status_id' => 'required',
            'Trip_id' => 'required',
        ]);
        $booking->StartDatum = $request->StartDatum;
        $booking->Trip_id = $request->Trip_id;
        $booking->Status_id = $request->Status_id;

        $booking->save();

        //redirect naar de index pagina
        if ($booking) {
            return redirect('/booking')->with('success', 'Uw booking is aangepast');

        } else {
            return back()->with('error', 'Uw booking is niet aangepast');
        }

    }

    //hier word de boeking verwijderd. eerst word er gecontroleerd of de boeking defintief is,
    // als dit niet het geval is, word de boeking verwijderd
    public function destroy(booking $booking)
    {
        if ($booking->status->Status == 'Definitief') {
            return back()->with('error', 'Uw booking is definitief en kan niet verwijderd worden');
        } else {
            $booking->delete();
            return back()->with('success', 'Uw booking is verwijderd');
        }
    }

}
