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


Route::post('/patients', [App\Http\Controllers\PatientController::class,'store'])->name('patient');
Route::get('/patients',function () {
    return view('patients/create');
});
//Route::view('create', 'patients/create');

  


Route::resource('statures', App\Http\Controllers\StatureController::class);

Route::resource('hopitals', App\Http\Controllers\HopitalController::class);


Route::resource('casinfecters', App\Http\Controllers\CasinfecterController::class);