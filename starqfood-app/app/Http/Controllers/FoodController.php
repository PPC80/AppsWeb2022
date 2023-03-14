<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Restaurante;
use App\Models\User;


/**
 * Class FoodController
 * @package App\Http\Controllers
 */
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::paginate();

        return view('food.index', compact('food'))
            ->with('i', (request()->input('page', 1) - 1) * $food->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food = new Food();
        $category = FoodCategory::pluck('category','id');
        $restaurant = Restaurant::pluck('local_name', 'ruc');
     


        return view('food.create', compact('food','category','restaurant'));
        //return var_dump(compact('food','category','restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = Restaurant::pluck('ruc');

        $this -> validate($request,[
            'food_id' => '',
            'category_id_fk' => 'required',
            'food_name' => 'required|max:50',
            'cost' => 'required|numeric',
            'time' => 'required|numeric',
            'visibility' => 'required',
            'ruc_fk' => 'required',
        ]);

        $food = Food::create($request->all());

        return redirect()->route('food.index')
            ->with('success', 'Food created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($food_id)
    {
        $food = Food::find($food_id);

        return view('food.show', compact('food'));
        //return var_dump(compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        $category = FoodCategory::pluck('category','id');
        $restaurant = Restaurant::pluck('local_name', 'ruc');
        
        return view('food.edit', compact('food','category','restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Food $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        
        $food->update($request->all());

        return redirect()->route('food.index')
            ->with('success', 'Food updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $food = Food::find($id)->delete();

        return redirect()->route('food.index')
            ->with('success', 'Food deleted successfully');
    }
}
