<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaytmController;

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


Route::get('/initiate',[PaytmController::class, 'initiate'])->name('initiate.payment');
Route::post('/payment',[PaytmController::class, 'pay'])->name('make.payment');
Route::post('/payment/status', [PaytmController::class, 'paymentCallback'])->name('status');
