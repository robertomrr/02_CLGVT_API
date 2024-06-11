<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\UserController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get(uri:'/users',action:[UserController::class,'index']);
Route::get(uri:'/users/{id}',action:[UserController::class,'show']);
Route::post(uri:'/users',action:[UserController::class,'store']);
Route::put(uri:'/users/{id}',action:[UserController::class,'update']);
Route::delete(uri:'/users/{id}',action:[UserController::class,'destroy']);
/*
* ! Observação  
* Agrupamento não funcionou 
* 
*  Route::prefix(prefix:'v2')->group(callback:function(){
*    Route::get(uri:'/users',action:[UserController::class,'index']);
*  });
*/ 
Route::get(uri:'/CE01',action:[ExempleController::class,'CollectionEx_01']);