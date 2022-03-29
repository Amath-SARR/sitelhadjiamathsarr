<?php

use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('home');

Route::resource('cv', FormationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('competence', CompetenceController::class);
Route::resource('contact', ContactController::class);
Route::resource('projet', ProjetController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
