<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    public function read(Request $request)
   {

        $rol=new Rol();
        $info=$rol->all();


        return response()->json($info);
   }

   public function create(Request $request)
   {
       $rol=new Rol();

     
       $rol->nombre_rol=$request->input("nombre");
      

       $rol->save();

       $message=["message"=>"Registro Exitoso"];
       
       return response()->json($message);

   }

   public function update(Request $request)
   {
       

       $idRol=$request->query("id");
       $rolId = Rol::find($idRol);

      
      
       $rolId->nombre_rol=$request->input("nombre");


       $rolId->save();

       $message=["message"=>"Actualizacion de Registro Exitoso"];
       
       return response()->json($message);
   }

   public function delete(Request $request)
   {
     

       $idRol=$request->query("id");
       $rolId = Rol::find($idRol);


       $rolId->delete();

       $message=["message"=>"Se Elimino Registro con Exito"];
       
       return response()->json($message);
   }

}
