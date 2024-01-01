<?php

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
Route::get('/', function () {
    return view('frontend.home');
});


Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware('userAuth');

Route::get('/login', function () {
    return view('backend.login');
});


Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/logout',[LoginController::class,'logout']);


Route::get('/teacher', function () {
    return ('Teacher Dashboard');
});
Route::get('/student', function () {
    return (' Student Dashboard');
});