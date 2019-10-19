<?php

namespace App\Http\Controllers;
use App\Users;
use App\ProductosAlmacenes;
use Illuminate\http\Request;

class ProductosAlmacenesController extends Controller
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

    public function get_productos_almacenes(){
        $productosalmacenes = ProductosAlmacenes::with(['producto', 'almacen'])->get();
        return response()->json($productosalmacenes);
    }



}
