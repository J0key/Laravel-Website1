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
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba' , [
        "nama" => "Perkenalkan nama saya Shyra",
        "email" => "shyray3545@gmail.com" ,
        "phone" => "0895341793967",
        "img" => "hinata kage.jpg"
    ]);
});


Route::get('/about', function () {
    return "Ini testing";
});

Route::get('/web1', function () {
    return view('website1');
});