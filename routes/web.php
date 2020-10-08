<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Hello');
});

Route::get('/user/{id}/{Name}' ,
            Function ($id , $Name) {return 'Hello ' . $id . " " . $Name; }
            ) ->where(['id' => '[0-9]+' , 'Name' => '[A-Za-z]+']) ;
