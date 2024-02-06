<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicalRecordController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::resource('/medical-record', MedicalRecordController::class);

Route::get('/home', function () {
    return redirect()->route('dashboard.index');
})->name('home');
