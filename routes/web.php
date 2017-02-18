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
use Illuminate\Support\Facades\DB;

Route::get('/', function ()
{
    //$names = ['Cena', 'Undertaker', 'Wyatt'];
    //$names = DB::table('names')->latest()->get();

    //return $names;
    // return view('welcome', compact('names'));
    return view('welcome');
});

Route::get('/names', function ()
{
    //$names = ['Cena', 'Undertaker', 'Wyatt'];
    $names = DB::table('names')->latest()->get();

    //return $names;
    return view('names.index', compact('names'));
});

Route::get('/names/{name}', function($id)
{
    $name = DB::table('names')->find($id);
    //dd($name);
    return view('names.show', compact('name'));
});

Route::get('about', function ()
{
    return view('about');
});
