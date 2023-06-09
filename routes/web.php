<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Expamle\FirstController;
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


Route::get('/about',function(){

    return view('about');
});

Route::get('/session',function(){

    return view('session');
});

Route::post('/result', [FirstController::class, 'index']);