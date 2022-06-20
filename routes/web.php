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
    return view('welcome');
});

Route::resource('etudiant','EtudiantController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/secretaire', [App\Http\Controllers\Secretaire::class, 'index'])->name('secretaires');
Route::get('/etudiant', [App\Http\Controllers\Etudiant::class, 'index'])->name('etudiants');

Route::get('/liste', [App\Http\Controllers\Liste::class, 'index'])->name('listes');




