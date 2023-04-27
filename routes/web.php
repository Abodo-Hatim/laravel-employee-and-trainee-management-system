<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StagiaireController;
use App\Models\Employe;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});

// !=========================================== employes ===========================
Route::resource('employes', EmployeController::class);

Route::delete('/delete-all-employes', function () {
    Employe::truncate();
    return redirect()->back()->with('success', 'All rows deleted successfully.');
})->name('delete-all-employes');

Route::get('/search', [EmployeController::class ,'search'])->name('search');
// !=========================================== employes ===========================





// !=========================================== stagiaires ===========================


Route::resource('stagiaires', StagiaireController::class);

Route::delete('/delete-all-stagiaires', function () {
    Stagiaire::truncate();
    return redirect()->back()->with('success', 'All rows deleted successfully.');
})->name('delete-all-stagiaires');

Route::get('/search', [StagiaireController::class ,'search'])->name('search');
// !=========================================== stagiaires ===========================
