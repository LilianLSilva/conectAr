<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperherosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/superheros', 'SuperherosController@index');
Route::get('/superheros', [App\Http\Controllers\SuperherosController::class, 'index']);
Route::post('/superheros/import', [App\Http\Controllers\SuperherosController::class, 'importSuperheros']);
Route::get('/superheros/import', [App\Http\Controllers\SuperherosController::class, 'superheroImport']);


