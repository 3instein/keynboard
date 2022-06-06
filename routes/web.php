<?php

use App\Models\Build;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InterestCheckController;

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
    return view('index');
})->name('home');

// Route::get('/build', function (){
//     return view('build');
// });

Route::resource('build', BuildController::class);
Route::resource('order', OrderController::class)->except(['create']);
Route::post('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::get('/order/{order}', [OrderController::class, 'invoice'])->name('order.invoice');
Route::post('/order/track', [OrderController::class, 'track'])->name('order.track');
Route::resource('interest-check', InterestCheckController::class);
Route::post('/build', [BuildController::class, 'load'])->name('build.load');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
