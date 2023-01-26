<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('cloths', [ClothController::class, 'index']) -> name('cloths.index');
Route::get('insertcloth', [ClothController::class, 'insert']) -> name('insertcloth');
// Route::get('insertcloth', [ClothController::class, 'create']) -> name('insertclothpost');
Route::get('insertcloth', [ClothController::class, 'create']) -> name('insertcloth');
Route::post('insertcloth', [ClothController::class, 'create']) -> name('insertclothpost');
Route::post('storecloth', [ClothController::class, 'store']) -> name('storecloth');
Route::get('indexClothes',[ClothController::class, 'index'])->name('cloths.index');
Route::get('updatecloth/{id}', [ClothController::class, 'update'])->name('updatecloth');
Route::put('editcloth', [ClothController::class, 'edit']) -> name('editcloth');
Route::get('show/{id}', [ClothController::class, 'show']) -> name('showcloth');
Route::delete('deletecloth/{id}', [ClothController::class, 'destroy']) -> name('deletecloth');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');