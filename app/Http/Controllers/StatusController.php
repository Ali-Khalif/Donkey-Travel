<?php

namespace App\Http\Controllers;

use App\Models\status;
use Illuminate\Http\Request;

//Gemaakt door: Ali Khalif
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
        return view('status.create');
    }


    public function store(Request $request)
    {
        //validate all request
        $this->validate($request, [
            'StatusCode' => 'required',
            'Status' => 'required',
            'Verwijderbaar' => 'required',
            'PIN' => 'required',
        ]);

        $status = new status();
        $status->StatusCode = $request->input('StatusCode');
        $status->Status = $request->input('Status');
        $status->Verwijderbaar = $request->input('Verwijderbaar');
        $status->PIN = $request->input('PIN');
        $status->save();

        if ($status) {
            return redirect('/status')->with('success', 'Status is met succes toegevoegd');

        } else {
            return redirect('/status')->with('error', 'Status is niet toegevoegd');

        }
    }


    public function show(status $status)
    {
        //
    }


    public function edit(status $status)
    {
        //edit status
        return view('status.edit', compact('status'));

    }


    public function update(Request $request, status $status)
    {
        //
        $request->validate([
            'StatusCode' => 'required',
            'Status' => 'required',
            'Verwijderbaar' => 'required',
            'PIN' => 'required',
        ]);
        $status = status::find($status->id);
        $status->StatusCode = $request->input('StatusCode');
        $status->Status = $request->input('Status');
        $status->Verwijderbaar = $request->input('Verwijderbaar');
        $status->PIN = $request->input('PIN');
        $status->save();

        if ($status) {
            return redirect('/status')->with('success', 'Status is met succes aangepast');

        } else {
            return redirect('/status')->with('error', 'Status is niet aangepast');

        }
    }


    public function destroy(status $status)
    {
        if ($status->Status == 'Definitief') {
            return redirect('/status')->with('error', 'Status mag niet verwijderd worden');
        } else {
            $status->delete();
            return redirect('/status')->with('success', 'Status is met succes verwijderd');
        }

    }
}
