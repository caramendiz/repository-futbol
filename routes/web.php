<?php

use App\Http\Controllers\Equipo_ciudadController;
use Illuminate\Support\Facades\Route;

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

// Route::get('futbol',[Equipo_ciudadController::class,'index']);

Route::post('form',[Equipo_ciudadController::class, 'store_dos'])->name('form.store');
Route::post('formdos',[Equipo_ciudadController::class,'store_tres'])->name('formdos.store');

Route::resource('futbol',Equipo_ciudadController::class);
