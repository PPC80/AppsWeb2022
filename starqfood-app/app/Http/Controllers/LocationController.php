<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Locale;

class LocationController extends Controller
{

    public function index()
    {
        $locations = Location::all();

        return view('components.ubicaciones', ['locations' => $locations ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $location=Location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng,
            'ruc_fk'=>$request->ruc
        ]);
        return redirect()->route('restaurants.show',$request->ruc);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }
}
