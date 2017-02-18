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
use App\Task;

Route::get('/', function ()
{
    //$names = ['Cena', 'Undertaker', 'Wyatt'];
    //$names = DB::table('names')->latest()->get();

    //return $names;
    // return view('welcome', compact('names'));
    return view('welcome');
});

Route::get('/tasks', function ()
{
    //$names = ['Cena', 'Undertaker', 'Wyatt'];
    //$names = DB::table('names')->latest()->get();
    $tasks = Task::all();

    //return $names;
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id)
{
    //$name = DB::table('names')->find($id);
    $task = Task::find($id);
    //dd($name);
    return view('tasks.show', compact('task'));
});

Route::get('/about', function ()
{
    return view('about');
});
