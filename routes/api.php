<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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
Route::get('/register', [ApiController::class,'register']);
Route::post('/userregister', [ApiController::class,'userregister']);
Route::get('/login', [ApiController::class,'login']);
Route::post('/loginuser', [ApiController::class,'loginuser']);
Route::get('/admin', [ApiController::class,'loginuser']);
Route::get('/detail', [ApiController::class,'detail'])->middleware('auth:sanctum');
Route::get('/eventsview', [ApiController::class,'eventsview']);
Route::get('/eventsadd', [ApiController::class,'eventsadd']);
Route::post('/addevent', [ApiController::class,'addevent']);
Route::get('/usersview', [ApiController::class,'usersview']);
Route::get('/usersadd', [ApiController::class,'usersadd']);
Route::post('/adduser', [ApiController::class,'adduser']);
Route::get('/anniversaryview', [ApiController::class,'anniversaryview']);
Route::get('/anniversarysadd', [ApiController::class,'anniversarysadd']);
Route::post('/addanniversary', [ApiController::class,'addanniversary']);


Route::get('/deleteanni/{id}', [ApiController::class,'deleteanni']);
Route::get('/deleteeven/{id}', [ApiController::class,'deleteeven']);
Route::get('/deleteuser/{id}', [ApiController::class,'deleteuser']);

