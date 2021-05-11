<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterationsController;
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
Route::get('/', [InterationsController::class,'index'])->name('home');


Route::post('/store', [InterationsController::class,'store'])->name('map.interaction');
Route::get('/locations', [InterationsController::class,'getLocations'])->name('map.locations');
Route::get('/map', [InterationsController::class,'index'])->name('map');
Route::get('/history', [HistoryController::class,'index'])->name('history');
Route::get('/foundation', [FoundationController::class,'index'])->name('foundation');
Route::get('/contact', [ContactController::class,'index'])->name('contact');

Route::get('locale/{locale}',function($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});
