<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Auth; //modelo user
use App\Facultad; //modelo user
use App\Rol; //modelo user
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/login');
    }

    public function home(){
        return view('home');
    }
    // public function add_user_administrativo(){
    //     $add = 1;
    //     return view('auth/register', compact('add'));
    // }
    // public function add_user_academico(){
    //     $add = 0;
    //     return view('auth/register', compact('add'));
    // }
}
