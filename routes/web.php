<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactoController;
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

Route::get('/', [IndexController::class, "show"]);
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, "show"]);
Route::get('/productos', [App\Http\Controllers\ProductoController::class, "show"]);
Route::get('/contacto', [ContactoController::class, "show"]);
Route::post('/contacto/create', [ContactoController::class, "store"]);
Route::view('/email', 'email');
Route::get('/probando', function (){ return view('probando');});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
