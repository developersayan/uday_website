<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('post-form-data',[App\Http\Controllers\Pages\HomepageController::class,'postData']);
Route::get('fetch-post-data',[App\Http\Controllers\Pages\HomepageController::class,'postDataFetch']);
Route::get('delete-post-data/{id}',[App\Http\Controllers\Pages\HomepageController::class,'deleteDataFetch']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
