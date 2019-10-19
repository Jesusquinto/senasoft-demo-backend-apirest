<?php

namespace App\Http\Controllers;
use App\Users;
use App\Productos;
use Illuminate\http\Request;

class ProductosController extends Controller
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

    public function get_productos(){
        $productos = Productos::get();
        return response()->json($productos);
    }



}
