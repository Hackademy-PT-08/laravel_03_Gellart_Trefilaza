<?php

use App\Http\Controllers\RecipesController;
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

Route::get('/', [RecipesController::class, 'index'])->name('homepage');
Route::get('/recipes-details/{id}', [RecipesController::class, 'show'] )->name('recipes-details');
Route::get('/category/{category}', [RecipesController::class, 'filter'] )->name('category');

