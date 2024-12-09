<?php

use App\Http\Controllers\PandaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pandas',[PandaController::class,"index"]);
Route::get('/pandas/{id}',[PandaController::class,"show"]);
