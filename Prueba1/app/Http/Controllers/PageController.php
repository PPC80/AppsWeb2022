<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function lista() {
        // $grades=Post::latest()->paginate();
        $notas = Grade::get();
        return view('lista',['notas'=>$notas]);
    }

    public function grades(Grade $nota) {
        return view('calificaciones', ['nota'=>$nota]);
    }

    public function editar() {
        return view('grades.edit');
    }
}
