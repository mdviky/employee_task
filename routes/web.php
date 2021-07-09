<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
Route::resource('employees', EmployeeController::class);
Route::get('/enter_otp', [EmployeeController::class,'enter_otp'])->name('enter_otp');
Route::post('/verify', [EmployeeController::class,'verify'])->name('verify');
Route::get('/home', [EmployeeController::class,'home'])->name('home');