<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\ModController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InterationsController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('', [StartController::class,'index'])->name('home');

Route::prefix('backoffice')->middleware(['auth'])->middleware('changeLanguage')->name('backoffice.')->group(function() {
    Route::get('/', [DashboardController::class,'index'])->name('start');

    Route::prefix('user')->middleware(['auth'])->name('user.')->group(function() {
        Route::get('/', [ModController::class,'index'])->name('list');
        /* Route::post('/store', [InterationsController::class,'store'])->name('interaction');
        Route::get('/locations', [InterationsController::class,'getLocations'])->name('locations');
        Route::get('/interations/{id}', [InterationsController::class,'getInterations'])->name('interations');
        Route::get('/interation/{id}', [InterationsController::class,'getInteration'])->name('detail'); */
    });
});

Route::prefix('map')->name('map.')->group(function() {
    Route::get('/', [InterationsController::class,'index'])->name('map');
    Route::post('/store', [InterationsController::class,'store'])->name('interaction');
    Route::get('/locations', [InterationsController::class,'getLocations'])->name('locations');
    Route::get('/interations/{id}', [InterationsController::class,'getInterations'])->name('interations');
    Route::get('/interation/{id}', [InterationsController::class,'getInteration'])->name('detail');
});

//This routes are the static pages for the frontoffice
Route::get('/history', [HistoryController::class,'index'])->name('history');
Route::get('/foundation', [FoundationController::class,'index'])->name('foundation');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/group', [StartController::class,'group'])->name('group');

//This route it's use to change the languange
Route::get('locale/{locale}',function($locale){
    session(['locale'=>$locale]);
    return redirect()->back();
});
