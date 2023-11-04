<?php

use App\Http\Controllers\IrfanController;
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

Route::get('/', [IrfanController::class,'getDataMovie']);

Route::get('/detail/{id}', [IrfanController::class,'getDataMovieById']);
