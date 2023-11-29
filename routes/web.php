<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VendaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function () {
    return view('Vendas/index');
});

Route::group(['prefix'=>'vendas'], function() {
    #visualizar
    Route::get('/', [VendaController::class, 'index']);
});

