<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/',[AgencyController::class,'indexAgency'])->name('agency.index');
Route::get('/create',[AgencyController::class,'createAgency'])->name('agency.create');
Route::post('/create',[AgencyController::class,'storeAgency'])->name('agency.store');
Route::get('/edit/{id}',[AgencyController::class,'editAgency'])->name('agency.edit');
Route::post('/edit/{id}',[AgencyController::class,'updateAgency'])->name('agency.update');
Route::get('/delete/{id}',[AgencyController::class,'deleteAgency'])->name('agency.delete');
Route::get('/search',[AgencyController::class,'search'])->name('search');
