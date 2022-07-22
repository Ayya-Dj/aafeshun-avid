<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'home'])
->name('home');

Route::get('/about-us', [PageController::class, 'about'])
->name('about');

Route::post('/contact-us', [PageController::class, 'contact'])
->name('contact');

Route::get('/products', [PageController::class, 'products'])
->name('products');

Route::get('/cart', [PageController::class, 'cart'])
->name('cart');

require __DIR__.'/auth.php';
