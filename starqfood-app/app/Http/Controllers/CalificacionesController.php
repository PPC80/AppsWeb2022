<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalificacionesController extends Controller
{
    public function store(Request $request)
    {
        $score1 = $request->input('calificacion_atencion');
        $score2 = $request->input('calificacion_comida');
        $score3 = $request->input('calificacion_tiempo');
        $score4 = $request->input('calificacion_platos');
        $score5 = $request->input('calificacion_ambiente');

        // $score1 = intval($score1);
        // $score2 = intval($score2);
        // $score3 = intval($score3);
        // $score4 = intval($score4);
        // $score5 = intval($score5);

        // $promedio = ($score1 + $score2 + $score3 + $score4 + $score5) / 5;

        DB::table('evaluations')->insert([
            'user_id_fk' => $request->user_id_fk,
            'ruc_fk' => $request->ruc_fk,
            'score1' => $score1,
            'score2' => $score2,
            'score3' => $score3,
            'score4' => $score4,
            'score5' => $score5,
        ]);

        $promedio = DB::table('evaluations')
                ->selectRaw('AVG(score1 + score2 + score3 + score4 + score5) as promedio')
                ->where('ruc_fk', $request->ruc_fk)
                ->first()
                ->promedio;

        DB::table('restaurantes')
            ->where('ruc', $request->ruc_fk)
            ->update(['score_local' => $promedio]);

        return redirect('/eval');
    }
    public function login()
    {
        return view('user.login');
    }

}
