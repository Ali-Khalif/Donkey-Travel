<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;

class BookingController extends Controller
{

    public function index()
    {
        //all
        $bookings = booking::all()->sortBy('StartDatum');
        return view('bookings.index', compact('bookings'));
    }


    public function create()
    {
        //
    }


    public function store(StorebookingRequest $request)
    {
        //
    }


    public function show(booking $booking)
    {
        //
    }


    public function edit(booking $booking)
    {
        //
    }


    public function update(UpdatebookingRequest $request, booking $booking)
    {
        //
    }


    public function destroy(booking $booking)
    {
        //
    }
}
