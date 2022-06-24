<?php
//Gemaakt door: Tiago
namespace App\Http\Controllers;

use App\Models\Herbergen;

use Illuminate\Http\Request;

class HerbergenController extends Controller
{

    public function index()
    {
        //alles herbergen ophalen
        $herbergens = Herbergen::all();
        return view('herberg.index', compact('herbergens'));
    }

    public function create()
    {
        //het formulier voor het toevoegen van een nieuwe herbergen
        return view('herberg.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'Naam' => 'required',
            'Adres' => 'required',
            'Telefoon' => 'required',
            'Email' => 'required',
            'Coordinaten' => 'required',
        ]);

        $herbergen = new Herbergen();
        $herbergen->Naam = $request->Naam;
        $herbergen->Adres = $request->Adres;
        $herbergen->Telefoon = $request->Telefoon;
        $herbergen->Email = $request->Email;
        $herbergen->Coordinaten = $request->Coordinaten;
        $herbergen->save();

        if ($herbergen) {
            return redirect('/herbergen')->with('success', 'Uw herberg is aangevraagd');

        } else {
            return redirect('/herbergen')->with('error', 'Uw herberg is niet aangevraagd');
        }

    }



    public function edit(Herbergen $herbergen)
    {
        //het formulier voor het bewerken van een herbergen
        return view('herberg.edit', compact('herbergen'));
    }

    public function update(Request $request, Herbergen $herbergen)
    {
        //validate all inputs
        $this->validate($request, [
            'Naam' => 'required',
            'Adres' => 'required',
            'Telefoon' => 'required',
            'Email' => 'required',
            'Coordinaten' => 'required',
        ]);

        $herbergen->Naam = $request->Naam;
        $herbergen->Adres = $request->Adres;
        $herbergen->Telefoon = $request->Telefoon;
        $herbergen->Email = $request->Email;
        $herbergen->Coordinaten = $request->Coordinaten;
        $herbergen->save();

        if ($herbergen) {
            return redirect('/herbergen')->with('success', 'Herbergen is met succes aangepast');

        } else {
            return redirect('/herbergen')->with('error', 'Herbergen is niet aangepast');
        }
    }


    public function destroy(Herbergen $herbergen)
    {
        //delete herbergen
        $herbergen->delete();

        if ($herbergen) {
            return redirect('/herbergen')->with('success', 'Herbergen is met succes verwijderd');

        } else {
            return redirect('/herbergen')->with('error', 'Herbergen is niet verwijderd');
        }

    }
}
