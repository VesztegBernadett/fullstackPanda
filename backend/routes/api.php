<?php

use App\Http\Controllers\PandaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pandas',[PandaController::class,"index"]);
Route::get('/pandas/{id}',[PandaController::class,"show"]);
Route::delete('/pandas/{id}',[PandaController::class,"destroy"])->name("pandas.destroy")
->whereNumber("id");
Route::post('/pandas',[PandaController::class,"store"])->name("pandas.store");