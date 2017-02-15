<?php

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

Route::get('/', function ()
{
    $names = ['Cena', 'Undertaker', 'Wyatt'];

    return view('welcome', compact('names'));
});

Route::get('about', function ()
{
    return view('about');
});