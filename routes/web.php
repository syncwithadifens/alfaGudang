<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

// NOTE: Manual Route
// Route::get('/produk', [ProductController::class, 'index']);
// Route::get('/produk/create', [ProductController::class, 'create']);
// Route::post('/produk', [ProductController::class, 'store']);
// Route::get('/produk/{id}', [ProductController::class, 'show']);
// Route::get('/produk/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/produk/{id}', [ProductController::class, 'update']);
// Route::delete('/produk/{id}', [ProductController::class, 'destroy']);

// NOTE: Automatic Route
Route::resource('produk', ProductController::class);
