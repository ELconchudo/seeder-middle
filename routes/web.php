<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;

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
    return view('roles');
});

Route::get('/roles', 'RoleController@index');

Route::post('/accion', 'RoleController@accion')->middleware('checkrole');



Route::resource('pokedexes', PokedexController::class);
Route::get('admin/user', 'admin\userController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
