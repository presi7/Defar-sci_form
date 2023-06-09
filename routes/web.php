<?php

use App\Models\Candidat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ModuleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route candidat


Route::get('/', [CandidatController::class, 'index']);
Route::get('/liste/candidat', [CandidatController::class, 'liste'])->name('liste.candidat');;
Route::post('/enregistrer/candidat', [CandidatController::class, 'store'])->name('store.candidat');
Route::post('/montrer/candidat', [CandidatController::class, 'show'])->name('show.candidat');
Route::get('/supprimer-candidat/{id}', [CandidatController::class, 'destroy'])->name('delete-candidat');
Route::get('/editer-candidat/{id}', [CandidatController::class, 'edit'])->name('edit-candidat');
Route::post('/modifier/candidat/{id}', [CandidatController::class, 'update'])->name('update.candidat');


//Route module


Route::get('/ajouter/module', [ModuleController::class, 'index'])->name('index');
Route::get('/liste/module', [ModuleController::class, 'liste'])->name('liste.module');
Route::post('/enregistrer/module', [ModuleController::class, 'store'])->name('store.module');
Route::get('/supprimer-module/{id}', [ModuleController::class, 'destroy'])->name('delete-module');
Route::get('/editer-module/{id}', [ModuleController::class, 'edit'])->name('edit-module');
Route::post('/modifier/module/{id}', [ModuleController::class, 'update'])->name('update.module');

