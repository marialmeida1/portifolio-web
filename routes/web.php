<?php

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
use App\Http\Controllers\PagsController;


Route::get('/', [PagsController::class, 'index']);
Route::get('/about', [PagsController::class, 'about']);
Route::get('/resume', [PagsController::class, 'resume']);
Route::get('/services', [PagsController::class, 'services']);
Route::get('/portfolio', [PagsController::class, 'portfolio']);
Route::get('/contact', [PagsController::class, 'contact']);
