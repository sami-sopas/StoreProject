<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('dashboard');
});

Route::get('/plantilla', function () {
    return view('prueba');
});

//Para agrupar los middlewares
// Route::middleware('auth')->group(function(){

// })


//Route::get('product/pdf',[ProductController::class,'pdf'])->name('product.pdf'); crear nuestra propia ruta
Route::resource('product',ProductController::class);

Route::resource('category',CategoryController::class)->middleware('auth');

Route::resource('user',UserController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});
