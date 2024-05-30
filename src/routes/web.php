<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranSPPController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/SPPAEROFEE', [PembayaranSPPController::class, 'index']);