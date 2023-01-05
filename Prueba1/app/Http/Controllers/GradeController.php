<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class GradeController extends Controller
{
    public function index(){
        return view('grades.index', [
            'notas'=>Grade::latest()->paginate()
        ]);
    }

    public function create(Grade $nota){
        return view('grades.create', ['nota'=>$nota]);
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'nota'=>'required',
        ],[
            'nombre.required'=>'Debe ingresar un nombre',
            'nota.required'=>'Debe ingresar una nota',
        ]);

        $nota = $request->user()->posts()->create([
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'nota' =>$request->nota,
        ]);
        return redirect()->route('grades.edit', $nota);
    }

    public function edit(Grade $nota){
        return view('grades.edit', ['nota'=>$nota]);
    }

    public function update(Request $request, Grade $nota){

        $request->validate([
            'nombre' => 'required',
            'nota' => 'required',
        ]);

        $nota->update([
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'nota' =>$request->nota,
        ]);
        return redirect()->route('grades.edit', $nota);
    }

    public function destroy(Grade $nota){
        $nota->delete();
        return back();
    }
}
