<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Payment;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Mail\test;
use Illuminate\Support\Facades\Mail;
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
    $name='saru';
    Mail::to('test@test.com')->queue(new test($name) );
    return view('welcome');
});



Route::get('/a', [OrderController::class, 'index']);

Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders/create', [OrderController::class, 'store']);
Route::get('/orders/edit/{id}', [OrderController::class, 'edit']);
Route::patch('/orders/update/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);


Route::get('/payments/create', [PaymentController::class, 'create']);
Route::post('/payments/create', [PaymentController::class, 'store']);
Route::get('/payments/edit/{id}', [PaymentController::class, 'edit']);
Route::patch('/payments/update/{id}', [PaymentController::class, 'update']);
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
 