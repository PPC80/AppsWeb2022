<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //
    public function index(){
        return view('posts.index', [
            'posts'=>Post::latest()->paginate()
        ]);
    }

    public function create(Post $post){
        return view('posts.create', ['post'=>$post]);
    }

    public function store(Request $request){
        //validacion simple utilizando los mensajes por defecto
        // $request->validate([
        //     'title' => 'required',
        //     'slug' => 'required|unique:posts,slug',
        //     'body' => 'required',
        // ]);

        //validación con mensajes personalizados
        $request->validate([
            'title'=>'required',
            'body'=>'required',
        ],[
            'title.required'=>'Este campo es requerido',
            'slug.required'=>'Colocar la url correspondiente',
            'slug.unique'=>'La Url debe ser única',
            'body.required'=>'Se necesita mínimo un párrafo',
        ]);

        $post = $request->user()->posts()->create([
            'title' => $title=$request->title,
            'slug' => Str::slug($title),
            // 'imagen' => request() -> file('imagen') -> store('images', 'public'),
            'body' =>$request->body,
        ]);
        return redirect()->route('posts.edit', $post);
    }

    public function edit(Post $post){
        return view('posts.edit', ['post'=>$post]);
    }

    public function update(Request $request, Post $post){

        $request->validate([
            'title' => 'required',
            //'slug' => 'required|unique:posts,slug' . $post->id,
            'slug'=> [
                'required', Rule::unique('posts','slug')->ignore($post->id)
            ],
            'body' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' =>$request->body,
        ]);
        return redirect()->route('posts.edit', $post);
    }

    public function destroy(Post $post){
        $post->delete();
        return back();
    }
}
