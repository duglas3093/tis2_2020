<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Carrera;
use App\Materia;
use App\Grupo;
use App\Unidad;
use App\Facultad;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($facultad_id, $materia_id)
    {
        // $carreras = Carrera::latest()->get();
        $materia = Materia::where('materia_id','=',$materia_id)->firstOrFail();
        $facultad = Facultad::where('facultad_id','=',$facultad_id)->firstOrFail();
        $grupos = Grupo::where([
            ['materia_id', '=' ,$materia_id],
            ['facultad_id','=',$facultad_id],
            ])->get();
        // $horarios = Horario::latest()->get();
        return view('grupo.index',[
            'grupos' => $grupos,
            'materia_id' => $materia_id,
            'materia' => $materia,
            'facultad' => $facultad,
            'facultad_id' => $facultad_id,
            // 'horarios' => $horarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($facultad_id,$materia_id)
    {
        // return "holas";
        // $materias = Materia::where('materia_id','=',$materia_id)->first();
        // $materias = Materia:: latest()->get();
        // $unidads = Unidad::latest()->get();
        return view('grupo.create',[
            'facultad_id' => $facultad_id,
            'materia_id' => $materia_id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $facultad_id,$materia_id)
    {
        Grupo::create([
            'grupo_numero' => $request->grupo_numero,
            'materia_id' => $materia_id,
            // 'carrera_id'=>$request->carrera_id,
            'facultad_id'=>$facultad_id
        ]);
        return redirect('facultad/'.$facultad_id.'/materia/'.$materia_id.'/grupo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($materia_id)
    {
        $materias = Materia::where('materia_id','=',$materia_id)->get();
        $grupos = Grupo::where('materia_id','=',$materia_id)->get();
        $unidads = Unidad::latest()->get();
        return view('grupo.index',[
            'grupos' => $grupos,
            'unidads' => $unidads,
            'materias' => $materias
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
