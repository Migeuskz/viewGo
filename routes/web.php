<?php

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\RegisterController;
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
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/new', function (){
    return view('modals.new');
});


Route::get('/crear-cuenta', [RegisterController::class,'index'])->name('register');
Route::post('/crear-cuenta', [RegisterController::class,'store']);

Route::post('/imagenes',[ImagenController::class, 'store'])->name('imagenes.store');