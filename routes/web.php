<?php

use App\Http\Controllers\MangController;
use App\Http\Controllers\MangoController;
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
    return view('welcome');
});
//1A
Route::get('/list-of-mangoes', [MangController::class, 'fetchData']);
//2A
Route::resource('/list-of-mangoes', 'MangoController');
