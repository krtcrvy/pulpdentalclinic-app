<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/services/extraction', function () {
    return view('services.extraction');
});

Route::get('/services/filling', function () {
    return view('services.filling');
});

Route::get('/services/orthodontics', function () {
    return view('services.orthodontics');
});

Route::get('/services/veeners', function () {
    return view('services.veeners');
});

Route::get('/services/whitening', function () {
    return view('services.whitening');
});
