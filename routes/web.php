<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VendaController;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'vendas'], function() {
    #visualizar
    Route::get('/', [VendaController::class, 'index']);
});

Route::get('/', function () {
    return View('Vendas.index');
});