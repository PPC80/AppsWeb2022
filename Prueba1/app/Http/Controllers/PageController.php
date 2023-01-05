<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {
        return view('home');
     }

     public function blog() {
        //consulta a la base de datos
        //$posts =[
          // ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
           //['id'=>2, 'title'=>'LARAVEL', 'slug'=>'laravel']
        //];
        //$posts = Post::get();
       // $post = Post::find(25);
        //dd($post);
        $posts=Post::latest()->paginate();
        //dd($posts);
        return view('blog',['posts'=>$posts]);
     }

     public function post(Post $post) {
        //consulta a la base de datos
       // $post = $slug;
        return view('post', ['post'=>$post]);
     }

     public function search() {
        $search_text = $_GET['query'];
        $posts = Post::where('title', 'LIKE', '%'.$search_text.'%')->get();

        return view('buscar', compact('posts'));
     }
}
