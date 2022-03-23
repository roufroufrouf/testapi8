<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('siswa', 'SiswaController@index');
// Route::post('siswa', 'SiswaController@create');
// Route::put('/siswa/{id}', 'SiswaController@update');
// Route::delete('/siswa/{id}', 'SiswaController@delete');
Route::get('siswa', [SiswaController::class, 'index']);
Route::post('siswa', [SiswaController::class, 'create']);
Route::put('/siswa/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [SiswaController::class, 'delete']);
