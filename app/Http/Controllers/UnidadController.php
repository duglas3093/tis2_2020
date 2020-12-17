<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Unidad;
use App\Facultad;

class UnidadController extends Controller
{
    function index($facultad_id){
        $unidads = Unidad::where('facultad_id','=',$facultad_id)->get();
        return view('unidad.index',[
            'unidads' => $unidads,
            'facultad_id' => $facultad_id
        ]);
    }

    function create($facultad_id){
        return view('unidad.create',[
            'facultad_id' => $facultad_id
        ]);
    }

    function store(Request $request, $facultad_id){
        // $datosUnidad = request()->all();
        // Unidad::insert($datosUnidad);

        // return response()->json($datosUnidad);
        // $facultad = Facultad::where('facultad_id','=',$facultad_id)->get();
        // $facultad = substr($facultad_id,5,1);

        Unidad::create([
            'unidad_nombre'=>$request->unidad_nombre,
            'facultad_id' => $facultad_id,
        ]);
        return redirect('facultad/'.$facultad_id.'/unidad');
    }

    
    function show(){
        
    }
    
    function edit(){}

    function update(){}

    function destroy($id){
        // $unidad = Unidad::where('unidad_nombre', '=', $unidad_id)->first();
        // $unidad->delete();
        // return redirect()->route('unidad.index');
        // return back();
        Unidad::destroy($id);
        return redirect('unidad.index');
    }
}
