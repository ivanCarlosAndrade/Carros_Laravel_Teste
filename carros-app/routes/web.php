<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carroController;
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

Route::get('/teste', function () {
    return view('teste');
});
Route::get('/',[carroController::class, 'index']);
Route::get('/detalhe/{id}',[carroController::class, 'show']);

Route::post ('/resgistar',[carroController::class, 'store']);