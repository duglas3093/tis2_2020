<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\User;
use App\Facultad; //modelo user
use App\Rol; //modelo user
// use App\Auth; //modelo user
class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'user_phone'=>'',
            'user_codsis'=>'',
            'user_ci'=>'',
            'user_nac'=>'',
            'rol_id'=>'',
        ]);
    }

    public function add_user_administrativo(){
        $add = 1;
        return view('auth/register', compact('add'));
    }
    public function add_user_academico(){
        $add = 0;
        return view('auth/register', compact('add'));
    }

    public function registrarUsuario(Request $request){
        // $request->validate([
        //     'name'=>['required'],
        //     'email'=>['required','unique:users','email'],
        //     'password'=>['required','min:8'],
        // ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'user_phone' => $request->user_phone,
            'user_codsis' => $request->user_codsis,
            'user_ci' => $request->user_ci,
            'user_nac' => $request->user_nac,
            'rol_id' => $request->rol_id,
        ]);
        return back();
    }
}
