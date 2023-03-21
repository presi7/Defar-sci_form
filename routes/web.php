<?php

use App\Models\Candidat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;
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



Route::get('/ajouter/candidat', [CandidatController::class, 'index']);
Route::get('/liste/candidat', [CandidatController::class, 'liste'])->name('liste.candidat');;
Route::post('/enregistrer/candidat', [CandidatController::class, 'store'])->name('store.candidat');
Route::get('/supprimer-candidat/{id}', [CandidatController::class, 'destroy'])->name('delete-candidat');
Route::get('/editer-candidat/{id}', [CandidatController::class, 'edit'])->name('edit-candidat');
Route::post('/modifier/candidat/{id}', [CandidatController::class, 'update'])->name('update.candidat');
