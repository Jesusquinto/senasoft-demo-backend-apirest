<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\http\Request;

class AuthController extends Controller
{
   

    public function register(Request $request){
        $this.validate($request,[
            'nombre'=> 'required|string|max:60',
            'email'=> 'required|email|unique:users',
            'password' =>'required|min:6'
        ]);

        try{
            $user = new Users;
            $user->nombre = $request->nombre;
            


        }catch(\Exception $e){
            return response()->json(['mensaje' => 'Error al registrar'], 409);
        }




    }



}
