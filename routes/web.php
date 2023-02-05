<?php

use App\Http\Livewire\Fcruds;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditarController;
use App\Http\Livewire\Editar;

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Fcruds::class)->name('dashboard');
Route::get('/tercero/{id}', [EditarController::class, 'editar'])->name('editar_tercero'); 