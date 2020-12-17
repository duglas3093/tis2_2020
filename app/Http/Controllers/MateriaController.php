<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Materia;
use App\Facultad;
use App\Carrera;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($facultad_id)
    {
        $materias = Materia::where("facultad_id","=",$facultad_id)->get();
        $facultad  = Facultad::where("facultad_id","=",$facultad_id)->firstOrFail();
        return view('materia.index',[
            'materias' => $materias,
            'facultad_id'=>$facultad_id,
            'facultad' => $facultad
        ]);
        // return view('materia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($facultad_id)
    {
        $unidads  = Unidad::latest()->get();
        $carreras = Carrera::latest()->get();
        return view('materia.create',[
            'carreras' => $carreras,
            'unidads' => $unidads,
            'facultad_id' => $facultad_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $facultad_id)
    {
        Materia::create([
            'materia_nombre' => $request->materia_nombre,
            'materia_codigo' => $request->materia_codigo,
            'facultad_id' => $facultad_id
        ]);
        return redirect('facultad/'.$facultad_id.'/materia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unidad_id)
    {
        // $materias = Materia::latest()->get();
        $materias = Materia::where("unidad_id","=",$unidad_id)->get();

        $unidads  = Unidad::where("unidad_id","=",$unidad_id)->get();
        return view('materia.index',[
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
