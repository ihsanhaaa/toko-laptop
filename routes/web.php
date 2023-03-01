<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\RoleController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GuestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [GuestController::class, 'guests']);
Route::get('lihat-spesifikasi/{product:slug}', [GuestController::class, 'guest']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    // Route::resource('roles', RoleController::class);
    // Route::resource('users', UserController::class);
    Route::resource('home/product', ProductController::class);

    Route::post('product/konfirmasi/{product}', [ProductController::class, 'status'])
        ->name('product.status');

});


