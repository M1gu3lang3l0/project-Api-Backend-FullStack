<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Controller\UsuarioController;
use App\Http\Controllers\api\UsuarioController;
use App\Http\Controllers\api\RolController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get("/saludar",function(Request $request)
{
     $message=['mensaje'=>'Buen Dia te saludo desde una Api construida en Laravel'];

     return response()->json($message);
});


Route::get("/user",[UsuarioController::class,'read']);
Route::post("/crear/user",[UsuarioController::class,'create']);
Route::put("/editar/user",[UsuarioController::class,'update']);
Route::delete("/eliminar/user",[UsuarioController::class,'delete']);



Route::get("/listar/rol",[RolController::class,'read']);
Route::post("/crear/rol",[RolController::class,'create']);
Route::put("/editar/rol",[RolController::class,'update']);
Route::delete("/eliminar/rol",[RolController::class,'delete']);




Route::post("/objeto",function(Request $request)
{
    $message = [
        "nombre" => "John Doe",
        "edad" => 30,
        "ciudad" => "New York",
        "hobbies" => ["fútbol", "pintura", "lectura"],
        "dirección" => [
            "calle" => "123 Main St",
            "ciudad" => "New York",
            "estado" => "NY",
            "país" => "Estados Unidos"
        ]
    ];

     return response()->json($message);
});
