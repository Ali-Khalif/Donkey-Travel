<?php

namespace App\Http\Controllers;

use App\Models\status;
use App\Http\Requests\StorestatusRequest;
use App\Http\Requests\UpdatestatusRequest;

class StatusController extends Controller
{

    public function index()
    {
        $statuses = status::all();
        return view('status.index', compact('statuses'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(status $status)
    {
        //
    }


    public function edit(status $status)
    {
        //
    }


    public function update(UpdatestatusRequest $request, status $status)
    {
        //
    }


    public function destroy(status $status)
    {
        //
    }
}
