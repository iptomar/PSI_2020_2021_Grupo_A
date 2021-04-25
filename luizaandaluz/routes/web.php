<?php

use App\Http\Controllers\interacoes;
use App\Http\Controllers\LoginController;
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

//Route::get('/', 'LoginController@index')->name('home');
//Route::get('/', [LoginController::class,'index'])->name('home');
Route::get('/', [interacoes::class,'index'])->name('home');
