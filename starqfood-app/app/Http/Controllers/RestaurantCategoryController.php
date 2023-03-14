<?php

namespace App\Http\Controllers;

use App\Models\RestaurantCategory;
use Illuminate\Http\Request;

/**
 * Class RestaurantCategoryController
 * @package App\Http\Controllers
 */
class RestaurantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantCategories = RestaurantCategory::paginate();

        return view('restaurant-category.index', compact('restaurantCategories'))
            ->with('i', (request()->input('page', 1) - 1) * $restaurantCategories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurantCategory = new RestaurantCategory();
        return view('restaurant-category.create', compact('restaurantCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $restaurantCategory = RestaurantCategory::create($request->all());

        return redirect()->route('restaurant.index')
            ->with('success', 'RestaurantCategory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurantCategory = RestaurantCategory::find($id);

        return view('restaurant-category.show', compact('restaurantCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurantCategory = RestaurantCategory::find($id);

        return view('restaurant-category.edit', compact('restaurantCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RestaurantCategory $restaurantCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantCategory $restaurantCategory)
    {
        

        $restaurantCategory->update($request->all());

        return redirect()->route('restaurant.index')
            ->with('success', 'RestaurantCategory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $restaurantCategory = RestaurantCategory::find($id)->delete();

        return redirect()->route('restaurant.index')
            ->with('success', 'RestaurantCategory deleted successfully');
    }
}
