<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function read(Request $request)
   {

        $persona=new Usuario();
        $info=$persona->all();


        return response()->json($info);
   }

   public function create(Request $request)
   {
       $persona=new Usuario();

       $persona->rol_id=$request->input("rol_id");
       $persona->nombres=$request->input("nombres");
       $persona->apellidos=$request->input("apellidos");
       $persona->tipo_identificacion=$request->input("tipo_identificacion");
       $persona->numero_identificacion=$request->input("numero_identificacion");
       $persona->telefono=$request->input("telefono");
       $persona->email=$request->input("email");
       $persona->profesion=$request->input("profesion");

       $persona->save();

       $message=["message"=>"Registro Exitoso"];
       
       return response()->json($message);

   }

   public function update(Request $request)
   {
       

       $idUser=$request->query("id");
       $personaId = Usuario::find($idUser);

      
       $personaId->rol_id=$request->input("rol_id");
       $personaId->nombres=$request->input("nombres");
       $personaId->apellidos=$request->input("apellidos");
       $personaId->tipo_identificacion=$request->input("tipo_identificacion");
       $personaId->numero_identificacion=$request->input("numero_identificacion");
       $personaId->telefono=$request->input("telefono");
       $personaId->email=$request->input("email");
       $personaId->profesion=$request->input("profesion");

       $personaId->save();

       $message=["message"=>"Actualizacion de Registro Exitoso"];
       
       return response()->json($message);
   }


   public function delete(Request $request)
   {
     

       $idUser=$request->query("id");
       $personaId = Usuario::find($idUser);


       $personaId->delete();

       $message=["message"=>"Se Elimino Registro con Exito"];
       
       return response()->json($message);
   }

   
}
