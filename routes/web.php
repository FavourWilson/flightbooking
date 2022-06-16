<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AdminController;
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
Route::get('available-flight',[FlightController::class, 'available']);
Route::post('available-flight',[FlightController::class, 'available']);


Route::get('gallery',[FlightController::class, 'gallery']);
Route::get('terms',[FlightController::class,'terms']);
Route::get('faq',[FlightController::class,'faq']);
Route::get('contact',[FlightController::class,'contact']);
Route::get('signin',[FlightController::class,'signin']);
Route::post('login',[FlightController::class,'login']);
Route::get('signup',[FlightController::class,'signup']);
Route::post('authenciate',[FlightController::class,'register']);



Route::get('admin/booking',[AdminController::class,'booking']);
Route::get('admin/create-schedule',[AdminController::class,'create']);
Route::post('admin/store',[AdminController::class,'store']);
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::put('admin/edit/{id}',[AdminController::class,'edit']);
Route::get('admin/edit-schedule/{id}',[AdminController::class,'editSchedule']);
Route::get('admin/schedule',[AdminController::class,'schedule']);
Route::get('admin/signin',[AdminController::class,'signin']);
Route::post('admin/auth',[AdminController::class,'auth']);
Route::get('admin/user',[AdminController::class,'user']);
Route::post('admin/logout',[AdminController::class,'logout']);