<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Gemaakt door: Ali Khalif
class UserController extends Controller
{
    /*
    public function index()
    {
        $user = Auth::user();
        return view('auth.index', compact('user'));
    }*/

    //
    public function edit()
    {
        $user = Auth::user();
        return view('auth.edit', compact('user'));
    }

    //

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telefoonnummer = $request->telefoonnummer;
        $user->save();
        //Auth::user()->sendEmailVerificationNotification();

        if ($user) {
            return redirect()->route('home')->with('success', 'Je profiel is aangepast');
        } else {
            return redirect()->route('home')->with('error', 'Er is iets fout gegaan');
        }
    }

    //destroy user
    public function destroy()
    {
        $user = Auth::user();
        $user->delete();

        if ($user) {
            return redirect()->route('register')->with('success', 'Je profiel is verwijderd');
        } else {
            return redirect()->route('register')->with('error', 'Er is iets fout gegaan');
        }
    }
}
