<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('post', Posts::class);
// Route::get('/home',[HomeController::class,'index'])->middleware(['auth:sanctum', 'verified']);
Route :: get('/home', [HomeController::class,'index'])->name('index')->middleware('auth:sanctum','verified');
Route :: get('/user', [HomeController::class,'index'])->name('user')->middleware('auth:sanctum','verified');
