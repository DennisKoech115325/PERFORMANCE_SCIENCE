<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\StatisticsController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('statistics', StatisticsController::class);
Route::resource('users', UsersController::class);
// Route::get('prediction/initiator={var1}&receiver={var2}',[PredictionController::class,'prediction']);
// Route::get('/prediction/',function(Request $request){});
Route::get('/prediction',[PredictionController::class,'prediction']);
