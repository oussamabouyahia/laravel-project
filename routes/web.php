<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "<h1>hello world</h1>";
});
Route::post('/user',UserController::class. '@user')->middleware(auth::class);
