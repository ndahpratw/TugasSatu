<?php

use App\Http\Controllers\MahasiswaController;
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


Route::get('/', [MahasiswaController::class, 'index']);

Route::get('/new-mhs', function () {
    return view('form');
});

Route::post('/data-baru', [MahasiswaController::class, 'data_baru']);