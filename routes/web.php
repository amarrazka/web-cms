<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::get('/', [IndexController::class ,'index']);
Route::post('/', [IndexController::class ,'insert']);

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');   
});

route::get('/login', [Logincontroller::class, 'Index']);
route::get('/register', [Registercontroller::class, 'Index']);

