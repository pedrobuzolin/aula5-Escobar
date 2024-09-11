<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout_adm.index');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/vendas', function () {
    return view('vendas');
});

Route::get('/secoes', function () {
    return view('secoes');
});

Route::get('/propaganda', function () {
    return view('propaganda');
});