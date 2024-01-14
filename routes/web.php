<?php

use Illuminate\Support\Facades\Route;
// controller all
use App\Http\Controllers\Home;
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
Route::get('/', [Home::class, 'beranda']);
Route::get('detail-product', [Home::class, 'detail_product']);
