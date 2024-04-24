<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get("/", [IndexController::class, 'index']);

Route::get('/edit/{personId}', [IndexController::class, 'edit']);
Route::get('/new', [IndexController::class, 'edit']);
