<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
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


Route::get('/category/all',[ CategoryController::class , 'Allcat'])->name('all.category');
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    
    Route::get('/productos', Productos::class);
    Route::get('/dashboard', function(){
        $users = DB::table('users')->get();
        //$users = User::all();
        return view('dashboard', compact('users'));
    })->name('dashboard');
});

