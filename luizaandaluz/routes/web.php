<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StartController;
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

Route::get('', [StartController::class,'index'])->name('home');

//Route::get('/', 'LoginController@index')->name('home');
//Route::get('/', [LoginController::class,'index'])->name('home');

Route::prefix('map')->name('map.')->group(function() {
    Route::get('/', [InterationsController::class,'index'])->name('map');
    Route::post('/store', [InterationsController::class,'store'])->name('interaction');
    Route::get('/locations', [InterationsController::class,'getLocations'])->name('locations');
});

Route::get('/history', [HistoryController::class,'index'])->name('history');
Route::get('/foundation', [FoundationController::class,'index'])->name('foundation');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/group', [StartController::class,'group'])->name('group');


//This route it's use to change the languange
Route::get('locale/{locale}',function($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});
