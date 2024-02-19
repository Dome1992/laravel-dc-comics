<?php

use Illuminate\Support\Facades\Route;

//IMPORTARE LA ROTTA CHE PORTA AL MAINCONTROLLER
use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class,'index']);

// ROTTA PER IL METODO SHOW
Route::get('/dettagliofumetto/{id}', [MainController :: class,'show'])
    -> name ('dettagliofumetto.show');

// ROTTA PER IL MOTODO CREATE
Route::get('/creanuovofumetto/create', [MainController :: class,'create'])
    -> name ('creanuovofumetto.create');

Route::post('/creanuovofumetto', [MainController :: class,'store'])
    -> name ('creanuovofumetto.store');

// ROTTA PER IL METODO EDIT/UPDATE
Route::get('/aggiornanuovofumetto/{id}/edit', [MainController :: class,'edit'])
    -> name ('aggiornanuovofumetto.edit');

Route::post('/aggiornanuovofumetto/{id}', [MainController :: class,'update'])
    -> name ('aggiornanuovofumetto.update');


