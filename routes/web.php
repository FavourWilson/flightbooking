<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
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
Route::get('welcome',[FlightController::class, 'welcome']);
Route::get('about',[FlightController::class, 'about']);
Route::get('destination',[FlightController::class, 'destination']);
Route::get('booking',[FlightController::class, 'booking']);
Route::post('booking',[FlightController::class, 'book']);
Route::get('cost',[FlightController::class, 'cost']);

Route::get('gallery',[FlightController::class, 'gallery']);
Route::get('terms',[FlightController::class,'terms']);
Route::get('faq',[FlightController::class,'faq']);
Route::get('contact',[FlightController::class,'contact']);
Route::get('login',[FlightController::class,'login']);
Route::post('login',[FlightController::class,'login']);
Route::get('signup',[FlightController::class,'signup']);
Route::post('signup',[FlightController::class,'signup']);