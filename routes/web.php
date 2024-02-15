<?php

use Illuminate\Support\Facades\Route;

//IMPORTARE LA ROTTA CHE PORTA AL MAINCONTROLLER
use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class,'index']);
