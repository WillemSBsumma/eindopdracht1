<?php

use App\Http\Controllers\EindOpdrachtController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EindOpdrachtController::class, 'index']);
Route::resource('gamePagina', EindOpdrachtController::class)
    ->parameters(['gamePagina' => 'demo']);
