<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

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
    return view('auth/login');
});
route::get('/anjay', function(){
    return redirect()->route('hello', ['hello'=>'cuy']);
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('home/{w}', [HomeController::class, 'hello'])->name('hello');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('employees', EmployeeController::class);

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
