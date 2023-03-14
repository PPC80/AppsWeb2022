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
        
        return view('users.create_map', ['restaurants' => $restaurants ]);
    }

    public function store(Request $request){

        Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);

        return view('users.create_map');
    }

    public function retrieve(){

        $locations = DB::table('locations')->select('latitude', 'longitude')->get();

        return view('users.ubicaciones', ['locations' => $locations ]);


    }
}