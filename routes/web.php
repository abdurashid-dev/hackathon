<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function (){
    Route::get('optimize', [AdminController::class, 'optimize'])->name('optimize');
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/hospital', [AdminController::class, 'hospitalTable'])->name('hospital.index');
    Route::get('/create/hospital', [AdminController::class, 'hospital'])->name('hospital');
    Route::post('/create/hospital', [AdminController::class, 'register'])->name('register');
});

Auth::routes([
//    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
