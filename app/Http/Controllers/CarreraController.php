<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Carrera;
use App\Unidad;
use App\Facultad;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($facultad_id){
        // $unidads = Unidad::latest()->get();
        // $carreras = Carrera::latest()->get();
        // return view('carrera.index',[
        //     'unidads' => $unidads,
        //     'carreras' => $carreras,
        //     'facultad_id' => $facultad_id
        //     ]);
        $carreras = Carrera::where("facultad_id","=",$facultad_id)->get();
        $unidads  = Unidad::where("facultad_id","=",$facultad_id)->get();
        $facultad = Facultad::where('facultad_id','=', $facultad_id)->firstOrFail();
        return view('carrera.index',[
            'unidads' => $unidads,
            'carreras' => $carreras,
            'facultad_id' => $facultad_id,
            'facultad' => $facultad
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($facultad_id)
    {
        // $carreras = Carrera::latest()->get();
        $unidads = Unidad::where('facultad_id', '=', $facultad_id)->get();
        return view('carrera.create',[
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
        Carrera::create([
            'carrera_nombre' => $request->carrera_nombre,
            'carrera_codigo' => $request->carrera_codigo,
            'unidad_id' => $request->unidad_id,
            'facultad_id'=>$facultad_id
        ]);
        return redirect('facultad/'.$facultad_id.'/carrera');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($unidad_id)
    {
        $carreras = Carrera::where("unidad_id","=",$unidad_id)->get();
        $unidads  = Unidad::where("unidad_id","=",$unidad_id)->get();
        return view('carrera.index',[
            'unidads' => $unidads,
            'carreras' => $carreras
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
