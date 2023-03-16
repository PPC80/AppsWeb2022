<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MarkerController extends Controller
{
    public function index(){

        $restaurants = Restaurant::all();

        return view('components.partials.gestionRestaurant', ['restaurants' => $restaurants ]);
    }

    public function store(Request $request){

        $restaurants = Restaurant::all();

        Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng,
            'ruc'=>$request->ruc
        ]);

        return view('components.partials.gestionRestaurant', ['restaurants' => $restaurants ]);
    }

    public function retrieve(){

        $locations = DB::table('locations')->select('latitude', 'longitude')->get();

        return view('components.ubicaciones', ['locations' => $locations ]);

    }
}
