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
    return view('home');
});


//apotando  home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //Rota para o customers
// Route::get('/getcustomers', 'CustomerController@showCustomers');
// Route::resource('/customers', 'CustomerController');

Route::get('/estudantes', 'EstudantesController@index');
// Route::resource('/estudantes', 'EstudantesController');


//rota para o user
Route::get('/getusers', 'UserController@showUsers');
Route::resource('/users', 'UserController');
Auth::routes();