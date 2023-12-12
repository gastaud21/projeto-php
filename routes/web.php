<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $arr = [10, 20, 30, 40, 50];
    $nome = "Rodrigo";
    return view('welcome', ["nome" => $nome, "arr" => $arr]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
