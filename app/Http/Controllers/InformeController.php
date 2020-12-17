<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InformeController extends Controller
{
    function index(){
        return view('informes.index');
    }
}
