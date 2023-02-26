<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Marker;

// class MarkerController extends Controller
// {
//     /**
//      * Save a new marker to the database.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $marker = new Marker();
//         $marker->lat = $request->input('lat');
//         $marker->lng = $request->input('lng');
//         $marker->save();

//         return response()->json([
//             'status' => 'success',
//             'message' => 'Marker saved successfully!'
//         ]);
//     }
// }

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MarkerController extends Controller
{
    public function index(){
        return view('show-map');
    }

    public function store(Request $request){

        Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);
        return view('show-map');
    }

    public function retrieve(){

        $locations = DB::table('locations')->select('latitude', 'longitude')->get();

        return view('retrieve-map', compact('locations'));


    }
}
