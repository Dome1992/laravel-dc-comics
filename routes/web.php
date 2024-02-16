<?php

use Illuminate\Support\Facades\Route;

//IMPORTARE LA ROTTA CHE PORTA AL MAINCONTROLLER
use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class,'index']);

// ROTTA PER IL METODO SHOW
Route::get('/pippo/{id}', [MainController :: class,'show'])
    -> name ('pippo.show');
