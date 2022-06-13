<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;


class RestaurantController extends Controller
{

    public function index()
    {
        //
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create()
    {
        //
        return view('restaurants.create');
    }


    public function store(Request $request)
    {
        //validate all inputs
        $this->validate($request, [
            'Naam' => 'required',
            'Adres' => 'required',
            'Telefoon' => 'required',
            'Email' => 'required',
            'Coordinaten' => 'required',
        ]);

        $restaurant = new Restaurant();
        $restaurant->Naam = $request->Naam;
        $restaurant->Adres = $request->Adres;
        $restaurant->Telefoon = $request->Telefoon;
        $restaurant->Email = $request->Email;
        $restaurant->Coordinaten = $request->Coordinaten;
        $restaurant->save();

        if ($restaurant) {
            return redirect('/restaurant')->with('succes', 'Restaurant is met succes toegevoegd');

        } else {
            return redirect('/restaurant')->with('error', 'Restaurant is niet toegevoegd');
        }
    }


    public function show(Restaurant $restaurant)
    {
        //
    }


    public function edit(Restaurant $restaurant)
    {
        //
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    public function destroy(Restaurant $restaurant)
    {
        //destroy restaurant
        $restaurant->delete();

        if ($restaurant) {
            return redirect('/restaurant')->with('succes', 'Restaurant is met succes verwijderd');

        } else {
            return redirect('/restaurant')->with('error', 'Restaurant is niet verwijderd');
        }
    }
}
