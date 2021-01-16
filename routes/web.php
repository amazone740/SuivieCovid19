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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('symptomes', App\Http\Controllers\SymptomeController::class);


Route::resource('agentSanitaires', App\Http\Controllers\AgentSanitaireController::class);

Route::resource('questionnaires', App\Http\Controllers\QuestionnaireController::class);

Route::resource('patients', App\Http\Controllers\PatientController::class);
