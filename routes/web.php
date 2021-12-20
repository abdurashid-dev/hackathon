<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
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
//    Hospital
    Route::get('/hospital', [AdminController::class, 'hospitalTable'])->name('hospital.index');
    Route::get('/hospital/{id}', [AdminController::class, 'hospitalShow'])->name('hospital.show');
    Route::get('/hospital/{id}/edit', [AdminController::class, 'hospitalEdit'])->name('hospital.edit');
    Route::post('/hospital/{id}/update', [AdminController::class, 'hospitalUpdate'])->name('hospital.update');
    Route::delete('/hospital/{id}', [AdminController::class, 'hospitalDestroy'])->name('hospital.destroy');
    Route::get('/create/hospital', [AdminController::class, 'hospital'])->name('hospital.create');
    Route::post('/hospital/store', [AdminController::class, 'register'])->name('register');
    Route::resources([
        'doctor' => DoctorController::class,
    ]);
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
