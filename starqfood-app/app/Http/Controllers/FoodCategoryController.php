<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use Illuminate\Http\Request;

/**
 * Class FoodCategoryController
 * @package App\Http\Controllers
 */
class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodCategories = FoodCategory::paginate();

        return view('food-category.index', compact('foodCategories'))
            ->with('i', (request()->input('page', 1) - 1) * $foodCategories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foodCategory = new FoodCategory();
        return view('food-category.create', compact('foodCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foodCategory = FoodCategory::create($request->all());

        return redirect()->route('foodcategory.index')
            ->with('success', 'FoodCategory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        $foodCategory = FoodCategory::find($category_id);

        return view('food-category.show', compact('foodCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foodCategory = FoodCategory::find($id);

        return view('food-category.edit', compact('foodCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FoodCategory $foodCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodCategory $foodCategory)
    {
        

        $foodCategory->update($request->all());

        return redirect()->route('foodcategory.index')
            ->with('success', 'FoodCategory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $foodCategory = FoodCategory::find($id)->delete();

        return redirect()->route('foodcategory.index')
            ->with('success', 'FoodCategory deleted successfully');
    }
}
