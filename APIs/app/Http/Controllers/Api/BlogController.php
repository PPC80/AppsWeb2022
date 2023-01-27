<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required|max:50',
            'contenido'=>'required|string|max:50',
            'categoria'=>'required | string | max:15'
        ]);

        return Blog::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Blog::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'=>'required|max:50',
            'contenido'=>'required|string|max:50',
            'categoria'=>'required | string | max:15'
            ]);

        $blog= Blog::find($id);

        $blog->update([
            'titulo'=> request('titulo'),
            'contenido'=> request('contenido'),
            'categoria'=> request('categoria')
        ]);

        return $blog;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog ->delete();

        return response()->json([
            'response' => 'El blog fue eliminado'
        ]);

    }
}
